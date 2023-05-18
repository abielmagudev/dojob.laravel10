<?php

namespace App\Api\Extensions;

use ReflectionClass;

trait HasReflectorInformant
{
    protected static $reflector;

    public static function reflector()
    {
        if( is_null(self::$reflector) )
            self::$reflector = new ReflectionClass( self::class );

        return self::$reflector;
    }

    public static function getRelativePathExtension()
    {
        return sprintf('app/Api/Extensions/%s', self::reflector()->getShortName());
    }

    public static function getAbsolutePathExtension()
    {
        return app_path( str_replace('app/', '', self::getRelativePathExtension()) );
    }
}
