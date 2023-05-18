<?php

namespace App\Api\Extensions\AirConditionTechnician;

use App\Api\Extensions\HasReflectorInformant;
use App\Api\Extensions\HasMigrationRunner;
use App\Api\Extensions\HasStaticHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirConditionTechnician extends Model
{
    use HasFactory;
    use HasMigrationRunner;
    use HasReflectorInformant;
    use HasStaticHelpers;

    protected $table = 'api_extension_air_condition_technician';

    public $name = 'Air Condition Technician';
    
    public $description = 'Is responsible for installing, maintaining, repairing, and servicing certain equipment and facilities, including air conditioning systems and units, water-cooling systems, and refrigerators within client’s own facilities, including those that operate all day long.';
}
