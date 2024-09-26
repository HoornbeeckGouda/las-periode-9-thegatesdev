<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\User;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    public function run(): void
    {
        Document::factory(30)->create()->each(function ($doc){
            $randomUsers = User::all('id')->random(fake()->numberBetween(1, min(3, UsersSeeder::MAX)));
            $doc->users()->saveMany($randomUsers);
        });
    }
}
