<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();
        $otherName = fake()->firstName();

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'official_name' => fake()->randomElement(["$firstName $otherName", "$firstName $otherName", "$otherName $firstName", $firstName]),
            'postal_code' => fake()->bothify("####??"),
            'street' => fake()->streetName(),
            'house_no' => fake()->numberBetween(1, 300),
            'house_no_addition' => fake()->boolean(15) ? fake()->randomElement(['a', 'b', 'c', 'd']) : null,
            'city' => fake()->city(),
        ];
    }
}
