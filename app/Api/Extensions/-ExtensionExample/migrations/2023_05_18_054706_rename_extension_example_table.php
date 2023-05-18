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
        Schema::rename(ExtensionExampleNameModel::getTableName(), 'new_name_for_extention_example_table');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
