<?php

namespace App\Models;

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
            $this->modeling_cache = new $this->model_classname;

        return $this->modeling_cache;
    }

    public function getTagsArrayAttribute()
    {
        return str_getcsv($this->tags_csv_format);
    }


    // To factory and seeder
    
    public static function stock()
    {
        return [
            \App\Models\ApiExtensions\AirConditioningInstallation::class,
            \App\Models\ApiExtensions\AtticInsulationCalculation::class,
            \App\Models\ApiExtensions\BattInsulationCalculation::class,
            \App\Models\ApiExtensions\MinisplitInstallation::class,
            \App\Models\ApiExtensions\WallInsulationCalculation::class,
            
            // more...
        ];
    }
}
