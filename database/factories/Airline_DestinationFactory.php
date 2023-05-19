<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Airline_Destination>
 */
class Airline_DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'destination_id' => $this->faker->numberBetween(1,45),
            'airport_id' => $this->faker->numberBetween(1,20),
            'airline_id' => $this->faker->numberBetween(1,45),
        ];
    }
}
