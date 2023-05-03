<?php

namespace Database\Factories;

use App\Models\ApiExtension;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApiExtension>
 */
class ApiExtensionFactory extends Factory
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
            self::$stock = ApiExtension::stock();

        self::$item = is_null(self::$item) ? current(self::$stock) : next(self::$stock);

        return [
            'name' => self::$item['name'],
            'model' => Str::studly( self::$item['name'] ),
            'slug' => Str::slug( self::$item['name'] ),
            'description' => self::$item['description'],
            'category' => self::$item['category'],
            'price' => $this->faker->boolean() ? $this->faker->randomFloat(2, 1, 200) : 0,
            'free_try' => $this->faker->boolean(),
            'is_available' => $this->faker->boolean(),
        ];
    }
}
