<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Irfan Zidny',
                'email' => 'irfan@example.com',
                'password' => Hash::make('password123'),
                'alamat' => 'Jl. Merdeka No. 10',
                'no_telp' => '081234567890',
                'role' => 'user',
            ],
            [
                'name' => 'Admin Toko',
                'email' => 'admin@toko.com',
                'password' => Hash::make('admin123'),
                'alamat' => 'Jl. Admin No. 1',
                'no_telp' => '087812341234',
                'role' => 'admin',
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'password' => Hash::make('password123'),
                'alamat' => 'Jl. Anggrek No. 22',
                'no_telp' => '081223344556',
                'role' => 'user',
            ],
            [
                'name' => 'Siti Rahma',
                'email' => 'siti@example.com',
                'password' => Hash::make('password123'),
                'alamat' => 'Jl. Melati No. 9',
                'no_telp' => '082112334455',
                'role' => 'user',
            ],
            [
                'name' => 'Dedi Kurnia',
                'email' => 'dedi@example.com',
                'password' => Hash::make('password123'),
                'alamat' => 'Jl. Kenanga No. 5',
                'no_telp' => '083223344556',
                'role' => 'user',
            ],
        ]);
    }
}
