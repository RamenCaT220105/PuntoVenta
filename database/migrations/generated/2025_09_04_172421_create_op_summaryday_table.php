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
        Schema::create('op_summaryday', function (Blueprint $table) {
            $table->integer('BATNBRDIARYSUMMARY');
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCE');
            $table->float('CURYRATE');
            $table->float('ROUND');
            $table->float('TOTALDIFERENCE');
            $table->string('OBSERVATION1', 500)->nullable();
            $table->string('OBSERVATION2', 500)->nullable();
            $table->float('TOTALPEN');
            $table->string('USERID', 20)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
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
        Schema::dropIfExists('op_summaryday');
    }
};
