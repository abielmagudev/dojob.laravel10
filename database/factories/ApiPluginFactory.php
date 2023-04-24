<?php

namespace Database\Factories;

use App\Models\ApiPlugin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApiPlugin>
 */
class ApiPluginFactory extends Factory
{
    public static $stock;

    public static $item;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if( is_null(self::$stock) )
            self::$stock = ApiPlugin::stock();

        self::$item = is_null(self::$item) ? current(self::$stock) : next(self::$stock);

        return [
            'name' => self::$item['name'],
            'description' => self::$item['description'],
            'slug' => Str::slug( self::$item['name'] ),
            'category' => self::$item['category'],
            'price' => $this->faker->randomFloat(2, 0, 300),
            'try_free' => $this->faker->boolean(),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
