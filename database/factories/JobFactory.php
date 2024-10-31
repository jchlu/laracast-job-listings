<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => '$' .
                fake()->numberBetween(10000, 100000) .
                '.' .
                str_pad(fake()->randomNumber(2, false), 2, 0, STR_PAD_LEFT)
        ];
    }
}
