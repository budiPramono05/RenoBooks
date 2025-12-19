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
        'title'       => 'Atomic Habits',
        'author'      => 'James Clear',
        'price'       => 150000,
        'stock'       => 50,
        'desc'        => 'Buku pengembangan diri yang membahas bagaimana perubahan kecil dan kebiasaan positif dapat menghasilkan dampak besar dalam hidup.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'The Midnight Library',
        'author'      => 'Matt Haig',
        'price'       => 170000,
        'stock'       => 40,
        'desc'        => 'Novel fiksi reflektif tentang kehidupan, penyesalan, dan kemungkinan hidup lain yang bisa kita jalani.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786020649320_the_midnight_library_cov.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'The Goodbye Cat',
        'author'      => 'Hiro Arikawa',
        'price'       => 99000,
        'stock'       => 30,
        'desc'        => 'Kumpulan cerita hangat dan menyentuh tentang hubungan antara manusia dan kucing, penuh emosi dan makna kehidupan.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/product-metas/tze1e783ed.jpeg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'Kota Seribu Lantai',
        'author'      => 'Dewi Intan',
        'price'       => 210000,
        'stock'       => 45,
        'desc'        => 'Novel fiksi spekulatif Indonesia yang menggambarkan kehidupan masyarakat dalam kota futuristik penuh lapisan sosial.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/product-metas/uiob6a1r-z.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'Filosofi Teras',
        'author'      => 'Henry Manampiring',
        'price'       => 120000,
        'stock'       => 60,
        'desc'        => 'Buku populer yang memperkenalkan filsafat Stoikisme sebagai panduan praktis menghadapi stres dan masalah hidup modern.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/11/27/kjf6cgigkomf6sy9o5qauu.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'Laut Bercerita',
        'author'      => 'Leila S. Chudori',
        'price'       => 115000,
        'stock'       => 55,
        'desc'        => 'Novel fiksi sejarah yang mengangkat kisah aktivisme, kehilangan, dan luka keluarga pada masa akhir Orde Baru.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/HC_Laut_Bercerita_FINAL_F.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'Rich Dad Poor Dad (2025)',
        'author'      => 'Robert T. Kiyosaki',
        'price'       => 165000,
        'stock'       => 35,
        'desc'        => 'Buku literasi keuangan klasik yang membahas perbedaan pola pikir antara orang kaya dan orang miskin dalam mengelola uang.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/product-metas/aoc2p-2727.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'Seni untuk Bersikap Bodo Amat',
        'author'      => 'Mark Manson',
        'price'       => 130000,
        'stock'       => 70,
        'desc'        => 'Buku self-help dengan pendekatan blak-blakan tentang menerima keterbatasan hidup dan menentukan hal yang benar-benar penting.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/sebuah_seni_untuk_bersikap_bodo_amat_hard_cover_font_revisi-1.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'Koloni',
        'author'      => 'Ratih Kumala',
        'price'       => 135000,
        'stock'       => 25,
        'desc'        => 'Novel fiksi yang mengangkat isu sosial, identitas, dan kehidupan manusia dalam sistem yang menekan kebebasan.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/product-metas/7o0co4ovo8.png',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
    [
        'title'       => 'Kisah Pi (Life of Pi)',
        'author'      => 'Yann Martel',
        'price'       => 140000,
        'stock'       => 20,
        'desc'        => 'Novel petualangan filosofis tentang perjuangan bertahan hidup, iman, dan makna kehidupan.',
        'cover_image' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/product-metas/ipf7e9o5as.jpg',
        'created_at'  => now(),
        'updated_at'  => now(),
    ],
        ]);

        
    }
}