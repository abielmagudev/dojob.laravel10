<?php

namespace App\Api\Extensions\AirCondition;

use App\Api\Extensions\Informable;
use App\Api\Extensions\Migratable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirCondition extends Model
{
    use HasFactory;
    use Informable;
    use Migratable;

    const NAME = 'Air condition';
    
    const DESCRIPTION = 'Ipsum dolor sit amet consectetur adipisicing elit.';

    protected $table = 'api_extension_air_condition';
}
