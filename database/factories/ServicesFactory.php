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
        $response = Http::timeout(60)->get('https://source.unsplash.com/random/800x800/?img=1');
        $image = $response->body();

        $filename = fake()->firstName().'.jpg';
        $services_picture_path = '/fileupload/services/'.$filename;
        file_put_contents(base_path().'/public'.$services_picture_path, $image);

        return [
            //'category' => $category,
            'title' => fake()->company(),
            'description' => fake()->catchPhrase(),
            'picture' => $filename,
            'price' => fake()->randomNumber(2),
            'remember_token' => Str::random(10),
        ];
    }
}
