<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
         ->count(1)
         ->state([
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password1'),
            'name' => 'admin1'
         ])
        ->create();
        User::factory()
         ->count(1)
         ->state([
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('password2'),
            'name' => 'admin2'
         ])
         ->create();
         User::factory()
         ->count(1)
         ->state([
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('password3'),
            'name' => 'admin3'
         ])
         ->create();
         User::factory()
         ->count(1)
         ->state([
            'email' => 'admin4@gmail.com',
            'password' => Hash::make('password4'),
            'name' => 'admin4'
         ])
         ->create();
         User::factory()
         ->count(1)
         ->state([
            'email' => 'admin5@gmail.com',
            'password' => Hash::make('password5'),
            'name' => 'admin5'
         ])
         ->create();
    }
}
