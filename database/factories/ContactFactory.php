<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone' => '+7 (3412) 123-45-67',
            'email' => 'office@izhevsk.ru',
            'adres' => 'г. Ижевск, ул. Пушкинская, 268Ж'
        ];
    }
}
