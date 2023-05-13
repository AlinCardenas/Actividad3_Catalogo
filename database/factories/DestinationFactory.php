<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $metadata = [
            'public/images/nombre_imagen1.jpg',
            'public/images/nombre_imagen2.jpg',
        ];
        $valor = json_encode($metadata);

        return [
            'name' => $this->faker->word(),
            'address' => $this->faker->sentence(2),
            'ranking' => $this->faker->numberBetween(1,10),
            'description' => $this->faker->paragraph(),
            'languages' => $this->faker->sentence(3),
            'images' => $valor,
        ];
    }
}
