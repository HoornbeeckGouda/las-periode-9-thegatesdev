<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(20)->create()->each(function ($user) {
            $profile = Profile::factory()->makeOne();
            $user->profile()->save($profile);
        });
    }
}
