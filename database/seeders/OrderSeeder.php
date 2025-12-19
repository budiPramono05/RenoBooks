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
        'user_id'     => 2, // User Satu
        'book_id'     => 1, // Atomic Habits (Harga: 150000)
        'qty'         => 2,
        'total_price' => 300000, // 2 * 150000
        'status'      => 'completed',
        'created_at'  => now()->subDays(10),
        'updated_at'  => now()->subDays(5),
    ],
    // Transaksi 2: User Dua membeli Clean Code (Paid)
    [
        'user_id'     => 3, // User Dua
        'book_id'     => 3, // Clean Code (Harga: 300000)
        'qty'         => 1,
        'total_price' => 300000, // 1 * 300000
        'status'      => 'paid',
        'created_at'  => now()->subDays(5),
        'updated_at'  => now()->subDays(4),
    ],
    // Transaksi 3: User Satu membeli Sapiens dan Filosofi Teras (Pending - Belum dibayar)
    // Dalam implementasi nyata, ini biasanya disimpan sebagai beberapa entri di tabel detail order,
    // tetapi di sini disederhanakan sebagai satu entri dengan ID buku utama.
    [
        'user_id'     => 2, // User Satu
        'book_id'     => 4, // Sapiens (Harga: 210000)
        'qty'         => 1,
        'total_price' => 210000, // Asumsi hanya satu buku untuk seeder sederhana
        'status'      => 'pending',
        'created_at'  => now()->subDays(2),
        'updated_at'  => now()->subDays(2),
    ],
    // Transaksi 4: User Dua membeli The Midnight Library (Shipped)
    [
        'user_id'     => 3, // User Dua
        'book_id'     => 2, // The Midnight Library (Harga: 170000)
        'qty'         => 3,
        'total_price' => 510000, // 3 * 170000
        'status'      => 'shipped',
        'created_at'  => now()->subDays(7),
        'updated_at'  => now()->subDays(6),
    ],
    // Transaksi 5: User Satu membeli Deep Work (Paid, menanti pengiriman)
    [
        'user_id'     => 2, // User Satu
        'book_id'     => 7, // Deep Work (Harga: 165000)
        'qty'         => 1,
        'total_price' => 165000, // 1 * 165000
        'status'      => 'paid',
        'created_at'  => now()->subHours(12),
        'updated_at'  => now()->subHours(10),
    ],
]);
    }
}