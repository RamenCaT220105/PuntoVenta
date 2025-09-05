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
        Schema::create('centinela', function (Blueprint $table) {
            $table->decimal('LINEA', 10, 0)->nullable();
            $table->dateTime('FECHA_HORA')->nullable();
            $table->string('NRO_TRANSACCION', 15)->nullable();
            $table->string('NRO_REFERENCIA', 15)->nullable();
            $table->decimal('ITEM', 10, 0)->nullable();
            $table->string('FAMILIA', 25)->nullable();
            $table->string('INVTIDSKU', 25)->nullable();
            $table->string('NOMBRE', 120)->nullable();
            $table->string('ATENCION', 200)->nullable();
            $table->integer('QTY')->nullable();
            $table->string('RUTA', 25)->nullable();
            $table->string('PTOVTA', 25)->nullable();
            $table->string('SALESPERID', 25)->nullable();
            $table->string('MESA', 5)->nullable();
            $table->decimal('CONTROL_MESA', 18, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centinela');
    }
};
