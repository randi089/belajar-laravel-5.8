<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nobp' => fake()->unique()->numberBetween(18101152620001, 18101152629999),
            'email' => fake()->unique()->safeEmail(),
            'jurusan' => fake()->words(2, true)
        ];
    }
}
