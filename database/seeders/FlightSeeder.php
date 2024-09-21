<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight; 

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Flight::factory()->count(20)->create();
    }
}
