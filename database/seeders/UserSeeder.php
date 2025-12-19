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
                'name'       => 'Admin Reno',
                'email'      => 'admin@renobooks.com',
                'password'   => Hash::make('password'),
                'alamat'     => 'Jl. Admin No.1, Jakarta',
                'no_telp'    => '081234567890',
                'role'       => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'User Satu',
                'email'      => 'user1@gmail.com',
                'password'   => Hash::make('password'),
                'alamat'     => 'Jl. Mawar No.10, Bandung',
                'no_telp'    => '081111111111',
                'role'       => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'User Dua',
                'email'      => 'user2@gmail.com',
                'password'   => Hash::make('password'),
                'alamat'     => 'Jl. Melati No.20, Surabaya',
                'no_telp'    => '082222222222',
                'role'       => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
