<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    public function definition(): array
    {
        return [
            'display_name' => strtoupper(fake()->words(3, true)),
        ];
    }
}
