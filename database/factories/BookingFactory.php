<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User; 
use App\Models\Flight; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'flight_id' => Flight::factory(),
            'passenger_name' => $this->faker->name(),
            'passenger_email' => $this->faker->unique()->safeEmail(),
            'passenger_phone' => $this->faker->phoneNumber(),
        ];
    }
}
