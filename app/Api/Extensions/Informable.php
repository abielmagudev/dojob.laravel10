<?php

namespace App\Api\Extensions;

use Exception;
use ReflectionClass;

trait Informable
{
    // ReflectionClass for called class

    protected static $reflector;

    public static function getReflectorInstance()
    {
        return new ReflectionClass( get_called_class() );
    }

    public static function reflector()
    {
        if( is_null(self::$reflector) )
            self::$reflector = self::reflectorInstance();

        return self::$reflector;
    }


    // Getters with Reflector

    public static function getConstantValue(string $constant_name)
    {
        if(! array_key_exists($constant_name, self::reflector()->getConstants()) )
            throw new Exception("Constant {$constant_name} not defined");

        return self::reflector()->getConstants()[$constant_name];
    }

    public static function getName()
    {
        return self::getConstantValue('NAME');
    }

    public static function getDescription()
    {
        return self::getConstantValue('DESCRIPTION');
    }

    public static function getDirectoryName()
    {
        return dirname( self::reflector()->getFileName() );
    }


    // Called class instanced (Eloquent)

    public function getNameAttribute()
    {
        return self::getName();
    }

    public function getDescriptionAttribute()
    {
        return self::getDescription();
    }
}
