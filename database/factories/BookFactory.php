<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'   => fake()->sentence(3),
            'author'  => fake()->name(),
            'genre'   => fake()->randomElement(['Fiction', 'Non-Fiction', 'Sci-Fi', 'Mystery']),
            'status'  => fake()->randomElement(['Want To Read', 'Currently Reading', 'Finished']),
            'rating'  => fake()->numberBetween(1, 10),
            'review'  => fake()->sentence(),
            'user_id' => 1,
        ];
    }
}
