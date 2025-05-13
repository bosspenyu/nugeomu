<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TServiceTypeSeeder::class,
            TDirectionSeeder::class,
        ]);

        \App\Models\TFare::factory()->count(10)->create();
    }
}
