<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(80, 120),
            'address' => $this->faker->sentence(3),
            'ranking' => $this->faker->numberBetween(1,10),
            'description' => $this->faker->paragraph(),
            'logo' => $this->faker->imageUrl(640, 480, 'cats'),
            'image' => $this->faker->imageUrl(640, 480, 'cats'),
            'destino_id' => $this->faker->numberBetween(1, 45),
        ];
    }
}
