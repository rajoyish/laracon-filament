<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Conference;
use App\Models\Speaker;
use App\Models\Talk;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Conference::factory(10)->create();
        Venue::factory(10)->create();
        Speaker::factory(10)->create();
        Talk::factory(10)->create();
    }
}
