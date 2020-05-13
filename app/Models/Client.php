<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'user_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function scopeGetClientsFromUser($query, $id = 0) {
        return $query->where('user_id', $id);
    }

    public function phoneNumbers() {
        return $this->hasMany(PhoneNumber::class);
    }
}


