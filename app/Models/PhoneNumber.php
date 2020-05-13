<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $fillable = [
        'phone',
        'client_id'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
