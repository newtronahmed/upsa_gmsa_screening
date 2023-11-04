<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'sex' => fake()->randomElement(['Male', 'Female']),
            'student_id' => fake()->unique()->randomNumber(8),
            'department' => fake()->randomElement(['Department A', 'Department B', 'Department C']),
            'level' => fake()->randomElement(['Level 1', 'Level 2', 'Level 3']),
            'contact' => fake()->phoneNumber,
            'path_no' => fake()->unique()->randomNumber(6),

            'bp' => fake()->randomFloat(2, 80, 180),
            'weight' => fake()->randomFloat(2, 40, 120),
            'height' => fake()->randomFloat(2, 140, 200),
            'bmi' => fake()->randomFloat(2, 15, 45),

            'phlebotomist' => fake()->name,
            'phlebotomy_time' => fake()->dateTimeBetween('-1 year', 'now'),

            'hepatitis_b' => fake()->randomElement(['Reactive', 'Non-reactive']),
            'h_pylori' => fake()->randomElement(['Reactive', 'Non-reactive']),
            'vdrl' => fake()->randomElement(['Reactive', 'Non-reactive']),
            'blood_group' => fake()->randomElement(['A', 'B', 'AB', 'O', 'Unknown']),
        ];
    }
}
