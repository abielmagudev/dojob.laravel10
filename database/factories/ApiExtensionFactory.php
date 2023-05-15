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

    public $categories_count;

    public $stock;

    public function definition(): array
    {
        if( is_null($this->categories_count) )
            $this->categories_count = ApiCategory::all()->count();

        if( is_null($this->stock) )
            $this->stock = ApiExtension::stock();

        $extension = current($this->stock);

        next($this->stock);

        return [
            'classname' => $extension,
            'api_category_id' => mt_rand(1, $this->categories_count),
        ];
    }
}
