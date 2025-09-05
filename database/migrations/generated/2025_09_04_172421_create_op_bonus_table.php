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
        Schema::create('op_bonus', function (Blueprint $table) {
            $table->char('DOCTYPEID', 3)->nullable();
            $table->decimal('NBRDOCUMENT', 10, 0)->nullable();
            $table->char('CUSTIDSS', 20)->nullable();
            $table->char('SITEID', 5)->nullable();
            $table->decimal('NBRBONUS', 10, 0)->nullable();
            $table->dateTime('DATEPROCESALES');
            $table->decimal('MONTOBONUS', 18, 4)->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER01', 30)->nullable();
            $table->string('USER02', 30)->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->char('PLACA', 10)->nullable();
            $table->char('NOMCONDUCTOR', 80)->nullable();
            $table->boolean('ESTADO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_bonus');
    }
};
