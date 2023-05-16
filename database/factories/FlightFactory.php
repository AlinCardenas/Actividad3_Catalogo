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

            'leave_date' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'arrive_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'count_clients' => $this->faker->numberBetween(50, 200),
            'duration' => $this->faker->numberBetween(1,20),
            'price' => $this->faker->numberBetween(1000, 15000),
            // 'type_lunggage' => $this->faker->word(),
            'plane_id' => $this->faker->numberBetween(1, 45),
            'airline_destination_id' => $this->faker->numberBetween(1, 45),
        ];
    }
}
