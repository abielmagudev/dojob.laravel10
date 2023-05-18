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
        Schema::table(ExtensionExampleNameModel::getTableName(), function(Blueprint $table) {
            $table->string('new_column')->after('other_column')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(ExtensionExampleNameModel::getTableName(), function (Blueprint $table) {
            $table->dropColumn('new_column');
        });
    }
};
