<?php

namespace App\Api\Extensions\AirCondition;

use App\Api\Extensions\HasReflectorInformant;
use App\Api\Extensions\HasManualMigration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirCondition extends Model
{
    use HasFactory;
    use HasManualMigration;
    use HasReflectorInformant;

    protected $table = 'api_extension_air_condition';

    public $name = 'Air condition';
    
    public $description = 'Ipsum dolor sit amet consectetur adipisicing elit.';
}
