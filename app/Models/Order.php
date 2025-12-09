<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // ORDER → belongsTo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ORDER → belongsTo Book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}