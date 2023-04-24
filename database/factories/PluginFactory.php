<?php

namespace Database\Factories;

use App\Models\ApiPlugin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plugin>
 */
class PluginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'api_plugin_id' => $this->faker->numberBetween(1, ApiPlugin::counter()),
        ];
    }
}
