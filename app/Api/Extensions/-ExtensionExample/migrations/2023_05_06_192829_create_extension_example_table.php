<?php

use App\Api\Extensions\ExtensionExampleNameModel\ExtensionExampleNameModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(! Schema::hasTable(ExtensionExampleNameModel::getTableName()) )
        {
            Schema::create(ExtensionExampleNameModel::getTableName(), function (Blueprint $table) {
                $table->id();
                // columns...
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(ExtensionExampleNameModel::getTableName());
    }
};
