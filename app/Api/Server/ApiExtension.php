<?php

namespace App\Api\Server;

use Database\Factories\ApiExtensionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiExtension extends Model
{
    use HasFactory;

    public function scopeCategories($query)
    {
        return $query->select('category')->groupBy('category')->orderBy('category')->pluck('category');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }


    // To factory and seeder
    
    public static function stock()
    {
        return [
            \App\Api\Extensions\AirCondition\AirCondition::class,
            
            // more...
        ];
    }

    protected static function newFactory()
    {
        return ApiExtensionFactory::new();
    }
}
