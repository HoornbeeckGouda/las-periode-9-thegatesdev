<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public const MAX = 20;

    public function run(): void
    {
        User::factory()->createOne([
            'email' => 'admin@example.com',
        ]);
        User::factory(UsersSeeder::MAX - 1)->create()->each(function ($user) {
            $profile = Profile::factory()->makeOne();
            $user->profiles()->save($profile);
        });
    }
}
