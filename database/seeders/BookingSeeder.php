<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking; 

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Booking::factory()->count(30)->create();
    }
}
