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
        Schema::create('op_salespointsetting', function (Blueprint $table) {
            $table->string('SALESPOINT', 10)->nullable();
            $table->string('TERMINALNAME', 25)->nullable();
            $table->dateTime('ENDDATEACT');
            $table->char('SERIALNUMBER', 17)->nullable();
            $table->boolean('STKTICKFAC');
            $table->boolean('STKTICKBOL');
            $table->string('CURYID', 3)->nullable();
            $table->boolean('STKLOADSALE');
            $table->decimal('NBRLOADSALE', 10, 0)->nullable();
            $table->boolean('STKPRINTERFAC');
            $table->boolean('STKPRINTEDBOL');
            $table->string('TYPEDISPFAC', 1)->nullable();
            $table->string('DISPFAC', 30)->nullable();
            $table->string('TYPEDISPBOL', 1)->nullable();
            $table->string('DISPBOL', 30)->nullable();
            $table->string('TYPEDISPNC', 1)->nullable();
            $table->string('DISPNC', 10)->nullable();
            $table->string('TYPEDISPND', 1)->nullable();
            $table->string('DISPND', 10)->nullable();
            $table->string('TYPEDISORDER', 1)->nullable();
            $table->string('DISPORDER', 10)->nullable();
            $table->string('TYPEDISPTICKFAC', 1)->nullable();
            $table->string('DISPTICKFAC', 30)->nullable();
            $table->decimal('NBRTICKFAC', 10, 0)->nullable();
            $table->string('TYPEDISPTICKBOL', 1)->nullable();
            $table->string('DISPTICKBOL', 30)->nullable();
            $table->decimal('NBRTICKBOL', 10, 0)->nullable();
            $table->string('DISPDISPLAY', 30)->nullable();
            $table->boolean('STKSALESPOINTFAC');
            $table->boolean('STKZETAOK');
            $table->boolean('STKTURNOK');
            $table->boolean('STKJUMPAUTOMAT');
            $table->tinyInteger('QTYJUMPAUTOMAT');
            $table->boolean('STKHOTKEYS');
            $table->boolean('STKDELETEDOC');
            $table->char('BUSINESSTYPE', 1)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->decimal('BATNBRSALES', 10, 0)->nullable();
            $table->boolean('STKTOFORCEZ');
            $table->char('PRINTERTYPEID', 2)->nullable();
            $table->boolean('QTYPRODUCT');
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
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
            $table->string('TYPEDISPTICKVALE', 1)->nullable();
            $table->string('DISPTICKVALE', 30)->nullable();
            $table->decimal('NBRTICKVALE', 18, 0)->nullable();
            $table->string('PUERTO_PRECUENTA', 30)->nullable();
            $table->string('NBRTICKCOM', 30)->nullable();
            $table->integer('FONT_PRINTER')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_salespointsetting');
    }
};
