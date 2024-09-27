<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    public function definition(): array
    {
        $file = fake()->filePath();
        return [
            'path' => $file,
            'display' => basename($file),
        ];
    }
}