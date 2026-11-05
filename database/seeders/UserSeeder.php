<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'Admin Resort',
                'email' => 'admin@resort.test',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'is_admin' => true,
                'age' => 35,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cliente Adulto',
                'email' => 'cliente@resort.test',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'is_admin' => false,
                'age' => 25,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cliente Menor',
                'email' => 'menor@resort.test',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'is_admin' => false,
                'age' => 16,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
