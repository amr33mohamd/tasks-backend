<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Generate a random title
            'description' => $this->faker->paragraph, // Generate a random paragraph
            'status' => $this->faker->randomElement(['pending', 'completed']), // Random status
        ];
    }
}
