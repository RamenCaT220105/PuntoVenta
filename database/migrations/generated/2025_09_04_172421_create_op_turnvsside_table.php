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
        Schema::create('op_turnvsside', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCE');
            $table->dateTime('DATESALES');
            $table->tinyInteger('NUMBERTURN');
            $table->string('SALESPERID', 20)->nullable();
            $table->string('SIDE', 2)->nullable();
            $table->boolean('STATUS');
            $table->char('SALESPERIDOLD', 20)->nullable();
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
        Schema::dropIfExists('op_turnvsside');
    }
};
