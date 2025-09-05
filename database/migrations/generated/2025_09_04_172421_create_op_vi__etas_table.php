<?php

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
        Schema::create('op_viñetas', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('DESCR_CORTA', 34)->nullable();
            $table->float('SLS_PRICE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_viñetas');
    }
};
