<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryName = "books";
        $unsplashUrl = "https://source.unsplash.com/1200x400/?{$categoryName}";
        return [
            'title' => fake()->word(),
            'cover' => $unsplashUrl,
            'author' => fake()->word(),
            'publisher' => fake()->word(),
            'genre' => fake()->word(),
            'publish_year' => fake()->randomNumber(4,true),
            'unit_price' => fake()->randomFloat(2)
        ];
    }
}
