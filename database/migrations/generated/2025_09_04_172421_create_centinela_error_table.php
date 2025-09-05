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
        Schema::create('centinela_error', function (Blueprint $table) {
            $table->decimal('IDE', 18, 0)->nullable();
            $table->decimal('CORRNBR', 18, 0)->nullable();
            $table->decimal('NBRERROR', 18, 0)->nullable();
            $table->string('DESCRIPCION', 500)->nullable();
            $table->string('PROCESO', 100)->nullable();
            $table->dateTime('FECHA_HORA')->nullable();
            $table->dateTime('DATEPROCESALES')->nullable();
            $table->string('SALESPOINT', 25)->nullable();
            $table->string('SALESPERID', 25)->nullable();
            $table->string('MESA', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centinela_error');
    }
};
