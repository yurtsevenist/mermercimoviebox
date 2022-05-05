<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::insert(
            [
                'name' => 'Tuna',
                'lastname' => 'Şahin',
                'email' => 'h.tunasahin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        \App\Models\User::insert(
            [
                'name' => 'Mustafa',
                'lastname' => 'Yurtseven',
                'email' => 'yurtsevenist@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
