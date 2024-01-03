<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin12345',
            'role' => 'admin',
            'email' => 'admin12345@gmail.com',
            'password' => Hash::make('admin12345'),
        ]);

        DB::table('users')->insert([
            'name' => 'user12345',
            'role' => 'user',
            'email' => 'user12345@gmail.com',
            'password' => Hash::make('user12345'),
        ]);


    }
}
