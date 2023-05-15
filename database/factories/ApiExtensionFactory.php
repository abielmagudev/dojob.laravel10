<?php

namespace Database\Factories;

use App\Api\Server\ApiCategory;
use App\Api\Server\ApiExtension;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApiExtension>
 */
class ApiExtensionFactory extends Factory
{
    protected $model = ApiExtension::class;

    public $stock;

    public function definition(): array
    {
        if( is_null($this->stock) )
            $this->stock = ApiExtension::stock();

        $extension = current($this->stock);
        next($this->stock);

        $tags = $this->faker->randomElements(['insulation', 'painting', 'maintenance', 'weatherization', 'carpenter'], 3);

        return [
            'model' => $extension,
            'tags' => implode(',', $tags),
        ];
    }
}
