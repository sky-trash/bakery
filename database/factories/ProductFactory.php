<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            'test-1.jpeg',
            'test-2.jpeg',
            'test-3.jpeg',
            'test-4.jpeg',
            'test-5.jpeg',
            'test-6.jpeg',
            'test-7.jpeg',
            'test-8.jpeg',
            'test-9.jpeg',
            'test-10.jpeg',
        ];
        $type = [
            'Булка',
            'Сладости',
            'Мясные',
            'Креки',
        ];

        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->text,
            'image' => $this->faker->randomElement($images),
            'price' => random_int(100, 10000),
            'type' => $this->faker->randomElement($type),
        ];
    }
}
