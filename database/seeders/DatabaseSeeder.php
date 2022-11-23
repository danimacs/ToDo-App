<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)
            ->has(
                Family::factory(5)->hasTasks(6))
            ->create();
    }
}
