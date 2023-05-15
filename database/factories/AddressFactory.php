<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addresses>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'street' => $this->faker->sentence(2),
            'number' => $this->faker->numberBetween(1,1000),
            'cp' => $this->faker->numberBetween(500,2000),
            'state' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            
        ];
    }
}
