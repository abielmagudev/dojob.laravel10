<?php

namespace App\Api\Extensions\AtticInsulation;

use App\Api\Extensions\HasReflectorInformant;
use App\Api\Extensions\HasManualMigration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtticInsulation extends Model
{
    use HasFactory;
    use HasManualMigration;
    use HasReflectorInformant;

    protected $table = 'api_extension_air_condition';

    public $name = 'Attic insulation';
    
    public $description = 'Helps to keep our home feeling comfortable. As it works to keep us warm during harsh, winter weather, it also plays a major role in keeping us cool in the scorching heat of the summer.';
}
