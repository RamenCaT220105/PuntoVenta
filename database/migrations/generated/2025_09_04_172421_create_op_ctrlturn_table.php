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
        Schema::create('op_ctrlturn', function (Blueprint $table) {
            $table->integer('BATNBRTURN');
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCES');
            $table->char('NBRTUR', 1)->nullable();
            $table->string('SALESPERID', 20)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->boolean('STATUS');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER01', 30)->nullable();
            $table->string('USER02', 30)->nullable();
            $table->bigInteger('USER03')->nullable();
            $table->bigInteger('USER04')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_ctrlturn');
    }
};
