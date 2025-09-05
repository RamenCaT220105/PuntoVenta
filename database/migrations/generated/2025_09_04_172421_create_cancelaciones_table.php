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
        Schema::create('cancelaciones', function (Blueprint $table) {
            $table->bigInteger('ID_CANCEL');
            $table->string('NRO_MESA', 5)->nullable();
            $table->longText('DESCRIPCION')->nullable();
            $table->string('FECHA', 30)->nullable();
            $table->string('FECHAPROCESO', 30)->nullable();
            $table->string('TIPO', 40)->nullable();
            $table->string('TIPO2', 25)->nullable();
            $table->integer('CORRNBR')->nullable();
            $table->integer('STKCLOSEDX')->nullable();
            $table->string('USERID', 20)->nullable();
            $table->string('PVENTA', 20)->nullable();
            $table->integer('CANTIDAD')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancelaciones');
    }
};
