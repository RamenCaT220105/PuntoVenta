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
        Schema::create('op_ordenc', function (Blueprint $table) {
            $table->char('DOCTYPEID', 3)->nullable();
            $table->decimal('NBRDOCUMENT', 18, 0)->nullable();
            $table->char('CUSTIDSS', 20)->nullable();
            $table->char('SITEID', 5)->nullable();
            $table->decimal('NBRBONUS', 18, 0)->nullable();
            $table->char('INVTIDSKU', 20)->nullable();
            $table->char('DESCRP', 50)->nullable();
            $table->dateTime('DATEPROCESALES')->nullable();
            $table->decimal('MONTOBONUS', 18, 4)->nullable();
            $table->decimal('SALDOBONUS', 18, 4)->nullable();
            $table->boolean('ESTADO')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_ordenc');
    }
};
