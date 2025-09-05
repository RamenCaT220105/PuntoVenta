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
        Schema::create('op_zeta', function (Blueprint $table) {
            $table->char('SALESPOINT', 10)->nullable();
            $table->dateTime('DATEPROCESALES');
            $table->dateTime('DATEZETA')->nullable();
            $table->decimal('TOTZETA', 11)->nullable();
            $table->smallInteger('NBRZETA');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_zeta');
    }
};
