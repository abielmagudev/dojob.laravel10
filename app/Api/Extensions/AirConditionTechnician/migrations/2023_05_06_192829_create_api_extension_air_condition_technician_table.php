<?php

use App\Api\Extensions\AirConditionTechnician\AirConditionTechnician;
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
        if(! Schema::hasTable(AirConditionTechnician::getTableName()) )
        {
            Schema::create(AirConditionTechnician::getTableName(), function (Blueprint $table) {
                $table->id();
                $table->enum('complete', ['system', 'change out']);
                $table->enum('type_unit', ['electric', 'gas', 'heat pump']);
                $table->string('code_permit');
                $table->text('verifications');
                $table->text('warranties');
                $table->text('components');
                $table->foreignId('task_id');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(AirConditionTechnician::getTableName());
    }
};
