<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
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
        $time = [
            '5 минут',
            '10 минут',
            '1 час',
            '25 минут',
            '40 минут',
        ];
        $type = [
            'Хранение',
            'Разогрев',
            'Заморозка',
            'Советы',
        ];
        return [
            'title' => $this->faker->sentence(5),
            'time' => $this->faker->randomElement($time),
            'type' => $this->faker->randomElement($type),
            'description' => $this->faker->text,
            'image' => $this->faker->randomElement($images),
        ];
    }
}
