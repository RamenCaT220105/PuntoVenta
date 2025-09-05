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
        Schema::create('op_loadsalesord', function (Blueprint $table) {
            $table->decimal('NBRLOADSALE', 10, 0)->nullable();
            $table->string('CURYID', 3)->nullable();
            $table->string('CUSTIDSS', 20)->nullable();
            $table->string('TAXREGNBR', 20)->nullable();
            $table->string('CUSTNAME', 40)->nullable();
            $table->string('ADDR1', 40)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->string('SALESPERID', 20)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->decimal('OPTRTOTPEN', 11, 4)->nullable();
            $table->decimal('OPTRTAXPEN', 9)->nullable();
            $table->dateTime('DOCDATE');
            $table->dateTime('DATEPROCESALES');
            $table->float('CURYRATE');
            $table->boolean('STKCHECK');
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
        Schema::dropIfExists('op_loadsalesord');
    }
};
