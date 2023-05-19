<?php

namespace App\Models\ApiExtensions\Kernel;

use ReflectionClass;

trait HasCustomHelpers
{
    protected static $table_name;

    protected static $reflection_instance;

    public static function getTableName()
    {
        if( is_null(self::$table_name) )
            self::$table_name = with(new self)->getTable();

        return self::$table_name;
    }

    public static function reflection()
    {
        if( is_null(self::$reflection_instance) )
            self::$reflection_instance = new ReflectionClass( self::class );

        return self::$reflection_instance;
    }
}
