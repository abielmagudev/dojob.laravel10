<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiExtension extends Model
{
    use HasFactory;

    private $incubator_cache = null;


    // Attributes

    public function getIncubatorAttribute()
    {
        if( is_null($this->incubator_cache) )
            $this->incubator_cache = new $this->model_classname;

        return $this->incubator_cache;
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
