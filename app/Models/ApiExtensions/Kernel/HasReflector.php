<?php

namespace App\Models\ApiExtensions\Kernel;

use Exception;
use ReflectionClass;

trait HasReflector
{    
    protected static $properties;

    protected static $reflection_instance;

    public static function reflection()
    {
        if( is_null(self::$reflection_instance) )
            self::$reflection_instance = new ReflectionClass( self::class );

        return self::$reflection_instance;
    }

    public static function getProperties()
    {
        if( is_null(self::$properties) )
            self::$properties = get_class_vars( self::class );

        return self::$properties;
    }

    public static function getProperty(string $name)
    {
        if(! array_key_exists($name, self::getProperties()) )
            throw new Exception('Reflector: property not exists');

        return self::getProperties()[$name];
    }

    public static function getName()
    {
        return self::getProperty('name');
    }

    public static function getDescription()
    {
        return self::getProperty('description');
    }

    /**
     * Also:
     * return with(new self)->getTable();
     */
    public static function getTableName()
    {
        return self::getProperty('table');
    }
}
