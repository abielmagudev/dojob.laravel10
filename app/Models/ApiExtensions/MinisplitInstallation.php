<?php

namespace App\Models\ApiExtensions;

use App\Models\ApiExtensions\Kernel\HasMigrationUpdates;
use App\Models\ApiExtensions\Kernel\HasReflector;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinisplitInstallation extends Model
{
    use HasFactory;
    use HasMigrationUpdates;
    use HasReflector;

    protected $table = 'api_extension_minisplit_installation';

    public $name = 'Minisplit Installation';
    
    public $description = 'Minisplit installation description.';

    public static $all_pieces = [
        'air handler',
        'ductless air handler',
        'condenser',
    ];

    public static function getAllPieces()
    {
        return self::$all_pieces;
    }
}
