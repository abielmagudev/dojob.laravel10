<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiExtension extends Model
{
    use HasFactory;

    public static $stock = [
        [
            'name' => 'Air condition',
            'description' => 'Configure verifications, component guarantees, as well as the components to be installed',
            'category' => 'weatherization',
        ],
        [
            'name' => 'Attic insulation',
            'description' => 'Configure the process to do the Attic insulation',
            'category' => 'insulation',
        ],
        [
            'name' => 'Batt insulation',
            'description' => 'Configure the process to do Batt insulation',
            'category' => 'insulation', 
        ],
        [
            'name' => 'Central furnance',
            'description' => 'Configure the type and platform of Central Furnace',
            'category' => 'weatherization', 
        ],
        [
            'name' => 'Corrective maintenance',
            'description' => 'Set the failures and solutions to solve the fault',
            'category' => 'maintenance',
        ],
        [
            'name' => 'Preventive maintenance',
            'description' => 'Configure the requirements required for one or every time',
            'category' => 'maintenance',
        ],
    ];

    public static function stock()
    {
        return self::$stock;
    }

    public static function counter()
    {
        return count( self::stock() );
    }
}
