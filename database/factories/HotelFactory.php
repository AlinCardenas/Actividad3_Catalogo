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
        $metadata = [
            'public/images/nombre_imagen1.jpg',
            'public/images/nombre_imagen2.jpg',
        ];
        $valor = json_encode($metadata);
        
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(80, 120),
            'address_id' => $this->faker->numberBetween(1,45),
            'ranking' => $this->faker->numberBetween(1,10),
            'description' => $this->faker->paragraph(),
            'logo' => $this->faker->imageUrl(640, 480, 'cats'),
            'image' => $valor,
            'service_id' => $this->faker->numberBetween(1, 45),
        ];
    }
}
