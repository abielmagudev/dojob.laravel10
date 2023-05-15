<?php

namespace Database\Factories;

use App\Api\Server\ApiExtension;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extension>
 */
class ExtensionFactory extends Factory
{
    protected $api_extensions_stock;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if( is_null($this->api_extensions_stock) )
            $this->api_extensions_stock = ApiExtension::all();

        $api_extensions_id = $this->faker->unique()->numberBetween(1, $this->api_extensions_stock->count());
        $api_extensions_classname = $this->api_extensions_stock->find($api_extensions_id)->classname;
                
        return [
            'api_extension_id' => $api_extensions_id,
            'api_extension_classname' => $api_extensions_classname,
        ];
    }
}
