<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserFlight>
 */
class UserFlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,45),
            'flight_id' => $this->faker->numberBetween(1,45),
            'numAsiento' => $this->faker->numberBetween(1, 50),
            'leave_date' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'arrive_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
