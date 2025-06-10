<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author' => fake()->name(),
            'message' => fake()->sentence(),
        ];
    }
}