<?php

namespace App\Api\Extensions\ExtensionExampleNameModel;

use App\Api\Extensions\HasReflectorInformant;
use App\Api\Extensions\HasMigrationRunner;
use App\Api\Extensions\HasStaticHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtensionExampleNameModel extends Model
{
    use HasFactory;
    use HasMigrationRunner;
    use HasReflectorInformant;
    use HasStaticHelpers;

    protected $table = 'example_extension_table_name';

    public $name = 'Name of extension example';
    
    public $description = 'Description of extension example.';
}
