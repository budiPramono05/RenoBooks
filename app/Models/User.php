<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
    'name',
    'email',
    'password',
    'alamat',
    'no_telp',
    'role',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    // USER → hasMany Orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
