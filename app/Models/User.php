<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    const PERMISSION_TO_VIEW_ALL_USERS_LOG = 1;
    const PERMISSION_TO_VIEW_PHONES = 2;
    const PERMISSION_TO_EDIT_PHONES = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'group_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        if ( $password !== null & $password !== "" )
        {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function clients() {
        return $this->hasMany(Client::class);
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function scopeHasPermissionToAllUsersLogs($query) {

        return $query->where('id', Auth::id())
            ->whereHas('group', function($query) {
            $query->whereHas('permissions',
            function($query) {
                $query->where('permissions.id',
                    $this::PERMISSION_TO_VIEW_ALL_USERS_LOG);
            });
        })->get()->count();
    }

    public function scopeHasPermissionToViewPhones($query) {

        return $query->where('id', Auth::id())
            ->whereHas('group', function($query) {
                $query->whereHas('permissions',
                    function($query) {
                        $query->where('permissions.id',
                            $this::PERMISSION_TO_VIEW_PHONES);
                    });
            })->get()->count();
    }

    public function scopeHasPermissionToEditPhones($query) {

        return $query->where('id', Auth::id())
            ->whereHas('group', function($query) {
                $query->whereHas('permissions',
                    function($query) {
                        $query->where('permissions.id',
                            $this::PERMISSION_TO_EDIT_PHONES);
                    });
            })->get()->count();
    }
}
