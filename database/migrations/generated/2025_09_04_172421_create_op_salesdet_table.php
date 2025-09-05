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
        Schema::create('op_salesdet', function (Blueprint $table) {
            $table->string('DOCTYPEID', 3)->nullable();
            $table->decimal('NBRDOCUMENT', 10, 0)->nullable();
            $table->char('SITEID', 5)->nullable();
            $table->smallInteger('SEQUENCE');
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('CURYID', 3)->nullable();
            $table->char('DOCSTATUSID', 2)->nullable();
            $table->dateTime('DATEDOC');
            $table->dateTime('DATEPROCESALES');
            $table->string('PERPOST', 6)->nullable();
            $table->tinyInteger('NBRTURN');
            $table->string('NBRSIDE', 2)->nullable();
            $table->char('NBRTRANSACFUEL', 4)->nullable();
            $table->decimal('PORCENTTAXIGV', 5)->nullable();
            $table->decimal('PORCENTTAXISC', 5)->nullable();
            $table->float('TOTALPEN');
            $table->float('TOTALUSD');
            $table->float('TAXPEN');
            $table->float('TAXUSD');
            $table->float('PORCENTDISCOUNT1')->nullable();
            $table->float('TOTDISCOUNTPEN')->nullable();
            $table->float('TOTDISCOUNTUSD')->nullable();
            $table->boolean('STKITEM');
            $table->boolean('STKFISI');
            $table->decimal('SLS_PRICE', 8, 4)->nullable();
            $table->float('SLSPRICESALE');
            $table->decimal('STDCOSTPEN', 8, 4)->nullable();
            $table->decimal('STDCOSTUSD', 8, 4)->nullable();
            $table->string('INVTIDALTER', 20)->nullable();
            $table->string('DESCRINVENTORY', 120)->nullable();
            $table->float('QTY');
            $table->string('USERID', 20)->nullable();
            $table->boolean('KIT');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->char('OPERADOR', 2)->nullable();
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->timestamp('USER4')->nullable();
            $table->timestamp('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_salesdet');
    }
};
