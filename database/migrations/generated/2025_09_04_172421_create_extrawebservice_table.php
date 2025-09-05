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
        Schema::create('extrawebservice', function (Blueprint $table) {
            $table->string('PVENTATABLETS', 20)->nullable();
            $table->string('NOMBREP_VENTA', 20)->nullable();
            $table->string('RUTAPRECUENT1', 30)->nullable();
            $table->string('RUTAPRECUENT2', 30)->nullable();
            $table->string('NMESAPRECUENT', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extrawebservice');
    }
};
