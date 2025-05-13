<?php

namespace Database\Seeders;

use App\Models\TDirection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TDirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_directions')->insert([
            ['inTAG' => 1, 'vcDIRECTION_NAME' => 'Outbound'],
            ['inTAG' => 2, 'vcDIRECTION_NAME' => 'Inbound'],
            ['inTAG' => 3, 'vcDIRECTION_NAME' => 'Return'],
        ]);
    }
}
