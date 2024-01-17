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
        //$this->clearPictures();
        
        Services::factory()
        ->count(1)
        ->state([
            'category' => 'Book-to-film/TV',
            'title' => 'Test',
            'description' => 'This is involves the systematic recording, summarizing, and reporting of financial
            transaction. It includes tasks like bookkeeping , preparation of financial statements
            (balance sheets, income statements), and ensuring compliance with financial regulations',
            'service_feature' => 'Book Keeping<br>
                                  Preparation of Financial Statement<br>
                                  Ensuring Compliance with Financial Regulations<br>
                                  Accounts Receivable and Payable Management<br>
                                  Financial Analysis and Interpretation<br>
                                  Budgeting and Forecasting<br>
                                  Inventory Management',
            'price' => 1,
            'picture' => 'service1.png'
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
