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
        Schema::create('curyrate', function (Blueprint $table) {
            $table->string('CURYTYPEID', 6)->nullable();
            $table->string('FROMCURYID', 3)->nullable();
            $table->string('TOCURYID', 3)->nullable();
            $table->dateTime('CURYDATE');
            $table->float('RATE');
            $table->char('OPERADOR', 1)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->boolean('STKMODIFY');
            $table->boolean('STKNEW');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->bigInteger('USER3')->nullable();
            $table->bigInteger('USER4')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curyrate');
    }
};
