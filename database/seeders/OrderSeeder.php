<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
    [
        'user_id' => 1,
        'book_id' => 1,
        'qty' => 1,
        'total_price' => 75000,
        'status' => 'pending',
    ],
    [
        'user_id' => 1,
        'book_id' => 4,
        'qty' => 2,
        'total_price' => 198000,
        'status' => 'paid',
    ],
    [
        'user_id' => 2,
        'book_id' => 2,
        'qty' => 1,
        'total_price' => 68000,
        'status' => 'completed',
    ],
    [
        'user_id' => 3,
        'book_id' => 7,
        'qty' => 1,
        'total_price' => 88000,
        'status' => 'shipped',
    ],
    [
        'user_id' => 3,
        'book_id' => 6,
        'qty' => 3,
        'total_price' => 135000,
        'status' => 'pending',
    ],
    [
        'user_id' => 4,
        'book_id' => 10,
        'qty' => 1,
        'total_price' => 110000,
        'status' => 'paid',
    ],
    [
        'user_id' => 4,
        'book_id' => 3,
        'qty' => 2,
        'total_price' => 112000,
        'status' => 'completed',
    ],
    [
        'user_id' => 5,
        'book_id' => 8,
        'qty' => 1,
        'total_price' => 92000,
        'status' => 'shipped',
    ],
    [
        'user_id' => 5,
        'book_id' => 9,
        'qty' => 1,
        'total_price' => 70000,
        'status' => 'completed',
    ],
    [
        'user_id' => 2,
        'book_id' => 5,
        'qty' => 2,
        'total_price' => 126000,
        'status' => 'paid',
    ],
]);
    }
}