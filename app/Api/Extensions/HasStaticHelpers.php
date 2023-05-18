<?php

namespace App\Api\Extensions;

trait HasStaticHelpers
{
    protected static $table_name;

    public static function getTableName()
    {
        if( is_null(self::$table_name) )
            self::$table_name = with(new static)->getTable();

        return self::$table_name;
    }
}
