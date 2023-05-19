<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public $api_extensions_path;

    public $api_extensions_migrations;

    public function __construct()
    {
        $this->api_extensions_path = database_path('api-extensions');

        $this->api_extensions_migrations = File::files(
            $this->api_extensions_path
        );
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {    
        foreach($this->api_extensions_migrations as $migration)
        {
            Artisan::call('migrate', [
                '--path' => sprintf('%s/%s', $this->api_extensions_path, $migration->getFilename()),
                '--force' => true,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach($this->api_extensions_migrations as $migration)
        {
            Artisan::call('migrate:rollback', [
                '--path' => sprintf('%s/%s', $this->api_extensions_path, $migration->getFilename()),
                '--force' => true,
            ]);
        }
    }
};
