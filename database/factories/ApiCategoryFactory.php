<?php

namespace Database\Factories;

use App\Api\Server\ApiCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApiCategory>
 */
class ApiCategoryFactory extends Factory
{
    protected $model = ApiCategory::class;

    public $stock;

    public function definition(): array
    {
        if( is_null($this->stock) )
            $this->stock = ApiCategory::stock();

        $pointer = current($this->stock);
        
        next($this->stock);

        return [
            'name' => $pointer['name'],
            'slug' => $pointer['slug'],
            'description' => $pointer['description'],
        ];
    }
}
