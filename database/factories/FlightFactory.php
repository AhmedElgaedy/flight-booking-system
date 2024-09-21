<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_number' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{4}'),
            'departure_city' => $this->faker->city(),
            'arrival_city' => $this->faker->city(),
            'departure_date' => $this->faker->date(),
            'departure_time' => $this->faker->time(),
            'arrival_date' => $this->faker->date(),
            'arrival_time' => $this->faker->time(),
            'available_seats' => $this->faker->numberBetween(50, 200),
            'price' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
