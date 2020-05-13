<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'groups_permissions');
    }

}
