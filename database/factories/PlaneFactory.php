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
            'cant'=> 1,
            'model'=> $this->faker->name(), 
            'type'=> $this->faker->name(), 
            'class'=> $this->faker->name(), 
        ];
    }
}
