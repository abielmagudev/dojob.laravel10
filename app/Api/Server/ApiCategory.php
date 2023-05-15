<?php

namespace App\Api\Server;

use Database\Factories\ApiCategoryFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ApiCategory extends Model
{
    use HasFactory;

    protected function slug(): Attribute
    {
        return new Attribute(
            set: function($value) {
                return Str::slug($value);
            }
        );
    }


    // To factory and seeder
    
    public static function stock()
    {
        return [
            [
                'name' => 'Insulation',
                'slug' => Str::slug('insulation'),
                'description' => 'A material or substance used in insulating.',
            ],
            [
                'name' => 'Maintenance',
                'slug' => Str::slug('maintenance'),
                'description' => 'The work of keeping something in proper condition; upkeep.',
            ],
            [
                'name' => 'Weatherization',
                'slug' => Str::slug('weatherization'),
                'description' => 'Protecting a building and its interior from the elements, particularly from sunlight, precipitation, and wind, and of modifying a building to reduce energy consumption and optimize energy efficiency',
            ],
        ];
    }

    protected static function newFactory()
    {
        return ApiCategoryFactory::new();
    }
}
