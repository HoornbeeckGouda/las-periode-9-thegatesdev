<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        Group::factory(5)->create();
    }
}
