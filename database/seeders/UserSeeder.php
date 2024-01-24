<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'email' => 'admin1@gmail.com'
         ])
        ->create();
        User::factory()
         ->count(1)
         ->state([
            'email' => 'admin2@gmail.com'
         ])
        ->create();
        User::factory()
         ->count(1)
         ->state([
            'email' => 'admin3@gmail.com'
         ])
        ->create();
        User::factory()
         ->count(1)
         ->state([
            'email' => 'admin4@gmail.com'
         ])
        ->create();
        User::factory()
         ->count(1)
         ->state([
            'email' => 'admin5@gmail.com'
         ])
        ->create();
    }
}
