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
        Schema::create('op_pd_manual', function (Blueprint $table) {
            $table->char('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCESALES');
            $table->float('SERVICIOS')->nullable();
            $table->float('GAS')->nullable();
            $table->float('MOBIL')->nullable();
            $table->float('TELEFONO')->nullable();
            $table->float('OTROS')->nullable();
            $table->float('PAG_DIFERENCIA')->nullable();
            $table->float('PAG_ADELANTADO')->nullable();
            $table->float('AFERICION')->nullable();
            $table->float('COBRANZAS')->nullable();
            $table->float('DEPOSITO_TIENDA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_pd_manual');
    }
};
