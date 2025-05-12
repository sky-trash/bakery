<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::get()->random()->id,
            'order_number' => 'ORD-' . now()->format('YmdHis') . '-' . rand(1000, 9999),
            'total_price' => random_int(100, 100000),
            'delivered_at' => $this->faker->date(),
        ];
    }
}
