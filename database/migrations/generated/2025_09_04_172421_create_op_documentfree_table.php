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
        Schema::create('op_documentfree', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('DOCUMENTFREEID', 10)->nullable();
            $table->string('CUSTIDSS', 20)->nullable();
            $table->dateTime('DATEPROCEINI');
            $table->dateTime('DATEPROCEFIN');
            $table->float('FREETOTAL');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USERID', 20)->nullable();
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
        Schema::dropIfExists('op_documentfree');
    }
};
