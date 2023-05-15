<?php

namespace App\Api\Extensions;

use Exception;
use ReflectionClass;

trait HasReflectorInformant
{
    protected static $reflector;

    public static function getReflectorInstance()
    {
        return new ReflectionClass( self::class );
    }

    public static function reflector()
    {
        if( is_null(self::$reflector) )
            self::$reflector = self::getReflectorInstance();

        return self::$reflector;
    }

    public static function getDirectoryName()
    {
        return dirname( self::reflector()->getFileName() );
    }
}
