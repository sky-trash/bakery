<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

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
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->text,
            'date' => $this->faker->date('Y-m-d'),
            'image' => $this->faker->randomElement($images),
        ];
    }
}
