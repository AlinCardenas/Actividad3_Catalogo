<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plane>
 */
class PlaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cant' => $this->faker->numberBetween(50, 100),
            'model' => $this->faker->word(),
            'type' => $this->faker->word(),
            'class' => $this->faker->word(),

        ];
    }
}
