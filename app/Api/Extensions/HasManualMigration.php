<?php

namespace App\Api\Extensions;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

trait HasManualMigration
{
    public static function install()
    {
        return Artisan::call('migrate', [
            '--path' => sprintf('%s/%s', self::getDirectoryName(), 'migrations'),
            '--force' => true,
        ], Log::info( sprintf('%s migrated', self::class) ));
    }
}
