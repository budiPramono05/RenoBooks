<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('books')->insert([
            [
                'title' => 'Belajar Laravel Untuk Pemula',
                'author' => 'Andi Pratama',
                'price' => 75000,
                'stock' => 12,
                'desc' => 'Panduan lengkap belajar Laravel dari dasar.',
                'cover_image' => 'laravel.jpg',
            ],
            [
                'title' => 'Pemrograman PHP Modern',
                'author' => 'Fajar Nugraha',
                'price' => 68000,
                'stock' => 10,
                'desc' => 'Dasar sampai mahir bahasa pemrograman PHP.',
                'cover_image' => 'php.jpg',
            ],
            [
                'title' => 'JavaScript Dasar',
                'author' => 'Rina Putri',
                'price' => 56000,
                'stock' => 15,
                'desc' => 'Memahami dasar JavaScript dengan mudah.',
                'cover_image' => 'js_basic.jpg',
            ],
            [
                'title' => 'Mastering React.js',
                'author' => 'Dimas Setiawan',
                'price' => 99000,
                'stock' => 7,
                'desc' => 'Buku lengkap React untuk frontend developer.',
                'cover_image' => 'react.jpg',
            ],
            [
                'title' => 'Belajar Database MySQL',
                'author' => 'Lutfi Anwar',
                'price' => 63000,
                'stock' => 20,
                'desc' => 'Belajar dasar hingga query tingkat lanjut.',
                'cover_image' => 'mysql.jpg',
            ],
            [
                'title' => 'Dasar HTML & CSS',
                'author' => 'Ika Nuraini',
                'price' => 45000,
                'stock' => 25,
                'desc' => 'Fondasi penting sebelum belajar website.',
                'cover_image' => 'htmlcss.jpg',
            ],
            [
                'title' => 'Python untuk Data Sains',
                'author' => 'Aulia Hidayat',
                'price' => 88000,
                'stock' => 14,
                'desc' => 'Panduan Python untuk analisis data.',
                'cover_image' => 'python_datascience.jpg',
            ],
            [
                'title' => 'Algoritma & Struktur Data',
                'author' => 'Yoga Saputra',
                'price' => 92000,
                'stock' => 10,
                'desc' => 'Konsep penting algoritma untuk developer.',
                'cover_image' => 'algo.jpg',
            ],
            [
                'title' => 'UI/UX Design Fundamental',
                'author' => 'Sari Dewi',
                'price' => 70000,
                'stock' => 8,
                'desc' => 'Dasar-dasar desain antarmuka yang baik.',
                'cover_image' => 'uiux.jpg',
            ],
            [
                'title' => 'Clean Code Indonesia',
                'author' => 'Taufik Ramadhan',
                'price' => 110000,
                'stock' => 5,
                'desc' => 'Cara menulis kode yang rapi dan mudah dibaca.',
                'cover_image' => 'cleancode.jpg',
            ],
        ]);

        
    }
}