<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
/*         $response = Http::timeout(60)->get('https://demo.tailgrids.com/templates/business/build/src/assets/images/portfolio/portfolio-01/image-05.jpg');
        $image = $response->body();

        $filename = fake()->firstName().'.png';
        $services_picture_path = '/fileupload/services/'.$filename;
        file_put_contents(base_path().'/public'.$services_picture_path, $image); */

        return [
            //'category' => $category,
         /*    'title' => fake()->company(), */
            /* 'description' => fake()->catchPhrase(), */
            /* 'picture' => $filename, */
            //'price' => fake()->randomNumber(2),
      /*       'price' => 1, */
            'remember_token' => Str::random(10),
        ];
    }
}
