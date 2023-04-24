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
            'job_id' => $this->faker->numberBetween(1, 10),
            'scheduled_at' => $this->faker->dateTimeBetween('- 1 year', 'now', 'America/Matamoros'),
            'notes' => $this->faker->optional()->text(128),
        ];
    }
}
