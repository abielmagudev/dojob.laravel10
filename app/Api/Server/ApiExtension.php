<?php

namespace App\Api\Server;

use Database\Factories\ApiExtensionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiExtension extends Model
{
    use HasFactory;

    private $modeling_cache = null;


    // Attributes

    public function getModelingAttribute()
    {
        if( is_null($this->modeling_cache) )
            $this->modeling_cache = new $this->model;

        return $this->modeling_cache;
    }

    public function getTagsArrayAttribute()
    {
        return json_decode($this->tags);
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
