<?php

namespace Database\Factories;

use App\Models\ApiExtension;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ApiExtension>
 */
class ApiExtensionFactory extends Factory
{
    public $stock;

    public function definition(): array
    {
        if( is_null($this->stock) )
            $this->stock = ApiExtension::stock();

        $api_extension_model = current($this->stock);
        
        next($this->stock);

        return [
            'model' => $api_extension_model,
            'tags_csv_format' => implode(',', 
                $this->faker->randomElements([
                    'insulation',
                    'painting', 
                    'maintenance', 
                    'weatherization', 
                    'carpenter',
                    'inspection',
                    'testing',
                ], 3)
            ),
        ];
    }
}
