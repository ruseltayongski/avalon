<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PromoCode;

class PromoCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::factory()
         ->count(1)
         ->state([
            'code' => '00001',
            'description' => 'test1',
            'discount' => 500,
         ])
        ->create();

        PromoCode::factory()
         ->count(1)
         ->state([
            'code' => '00002',
            'description' => 'test2',
            'discount' => 1000,
         ])
        ->create();

        PromoCode::factory()
         ->count(1)
         ->state([
            'code' => '00003',
            'description' => 'test3',
            'discount' => 2000,
         ])
        ->create();
    }
}
