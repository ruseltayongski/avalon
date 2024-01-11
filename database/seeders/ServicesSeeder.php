<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Services;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->clearPictures();
        
        Services::factory()
        ->count(4)
        ->state([
            'category' => 'Book',
        ])
        ->create()
        ->each(function ($services) {
            $user = User::inRandomOrder()->first();
            $services->update([
                'created_by' => $user->id
            ]);
        });

        Services::factory()
        ->count(1)
        ->state([
            'category' => 'Business Affairs',
        ])
        ->create()
        ->each(function ($services) {
            $user = User::inRandomOrder()->first();
            $services->update([
                'created_by' => $user->id
            ]);
        });

        Services::factory()
        ->count(5)
        ->state([
            'category' => 'Marketing',
        ])
        ->create()
        ->each(function ($services) {
            $user = User::inRandomOrder()->first();
            $services->update([
                'created_by' => $user->id
            ]);
        });

        Services::factory()
        ->count(5)
        ->state([
            'category' => 'Accounting',
        ])
        ->create()
        ->each(function ($services) {
            $user = User::inRandomOrder()->first();
            $services->update([
                'created_by' => $user->id
            ]);
        });
    }

    public function clearPictures() {
        $folderPath = base_path().'/public/fileupload/services';

        $allowedExtensions = ['jpg', 'png', 'gif']; 

        if ($handle = opendir($folderPath)) {
            while (false !== ($file = readdir($handle))) {
                if (is_file($folderPath . '/' . $file) && in_array(pathinfo($file, PATHINFO_EXTENSION), $allowedExtensions)) {
                    unlink($folderPath . '/' . $file);
                }
            }
            closedir($handle);
        }
    }
}
