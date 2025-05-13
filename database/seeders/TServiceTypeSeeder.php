<?php

namespace Database\Seeders;

use App\Models\TServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_service_types')->insert([
            ['inTAG' => 1, 'vcSERVICE_NAME' => 'Budget'],
            ['inTAG' => 2, 'vcSERVICE_NAME' => 'Premier'],
            ['inTAG' => 3, 'vcSERVICE_NAME' => 'Family'],
            ['inTAG' => 4, 'vcSERVICE_NAME' => 'Luxury'],
        ]);
    }
}
