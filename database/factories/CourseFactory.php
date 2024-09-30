<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        $nameWords = fake()->words(fake()->numberBetween(1,3));
        $acronym = "";
        foreach($nameWords as $word) $acronym .= strtoupper($word[0]);
        return [
            'name' => join(" ", $nameWords),
            'prefix' => $acronym,
        ];
    }
}
