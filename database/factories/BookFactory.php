<?php
namespace App\Http\Controllers;
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name,
            'isbn' => $this->faker->isbn13,
            'published_year' => $this->faker->year,
            'genre' => $this->faker->word,
            'availability' => $this->faker->boolean(50),
        ];
    }
}
