<?php

use App\Api\Extensions\AtticInsulation\AtticInsulation;
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
        if(! Schema::hasTable(AtticInsulation::getTableName()) )
        {
            Schema::create(AtticInsulation::getTableName(), function (Blueprint $table) {
                $table->id();
                $table->enum('method', ['airkrete', 'blown', 'cellulose', 'foam']);
                $table->string('r_value');
                $table->decimal('square_feets', 8, 2, true);
                $table->integer('bags')->default(0);
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
        Schema::dropIfExists(AtticInsulation::getTableName());
    }
};
