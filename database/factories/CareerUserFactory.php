<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CareerUserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'start_date' => fake()->date(),
            'end_date' => fake()->date(max: now()->addYears(1)->setMonth(8)->setDay(1)),
        ];
    }
}
