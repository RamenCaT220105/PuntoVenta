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
        Schema::create('in_intraitem', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('BATNBR', 10)->nullable();
            $table->string('TYPEDOCID', 5)->nullable();
            $table->smallInteger('SEQUENCE');
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('INVTIDBARR', 20)->nullable();
            $table->float('QTY');
            $table->decimal('TAXIGV', 4)->nullable();
            $table->float('STDCOSTPEN');
            $table->float('STDCOSTUSD');
            $table->boolean('STKFISI');
            $table->dateTime('INTRDATE');
            $table->dateTime('INTRDATEPROCE');
            $table->boolean('RLSED');
            $table->decimal('TAXISC', 4)->nullable();
            $table->string('BUYCOD', 20)->nullable();
            $table->char('DOCSTATUSID', 2)->nullable();
            $table->float('STDCOSTPENOLD');
            $table->float('STDCOSTUSDOLD');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->dateTime('USER4')->nullable();
            $table->dateTime('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->decimal('INTPERCPEN', 12)->nullable();
            $table->decimal('INTPERCUSD', 12)->nullable();
            $table->decimal('TAXPERC', 12, 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_intraitem');
    }
};
