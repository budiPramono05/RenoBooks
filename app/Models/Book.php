<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // BOOK → hasMany Orders
    public function Orders()
    {
        return $this->hasMany(Order::class);
    }
}