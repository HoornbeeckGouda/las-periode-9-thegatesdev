<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => fake()->sentence(),
            'number' => fake()->numberBetween(0, 100),
        ];
    }
}
