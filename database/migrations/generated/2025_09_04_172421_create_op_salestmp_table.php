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
        Schema::create('op_salestmp', function (Blueprint $table) {
            $table->string('DOCTYPEID', 3)->nullable();
            $table->decimal('NBRDOCUMENT', 10, 0)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->char('TYPEPAYMENTID', 2)->nullable();
            $table->boolean('STKINVENTORY');
            $table->string('CURYID', 3)->nullable();
            $table->char('DOCSTATUSID', 2)->nullable();
            $table->char('TERMID', 2)->nullable();
            $table->string('SALESPERID', 20)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->dateTime('DATEDOC');
            $table->dateTime('DATEPROCESALES');
            $table->string('PERPOST', 6)->nullable();
            $table->char('TAXIGVID', 2)->nullable();
            $table->char('TAXISCID', 2)->nullable();
            $table->decimal('TOTALPEN', 11, 4)->nullable();
            $table->decimal('TOTALUSD', 11, 4)->nullable();
            $table->decimal('SUBTOTALPEN', 11, 4)->nullable();
            $table->decimal('SUBTOTALUSD', 11, 4)->nullable();
            $table->decimal('TAXIGVPEN', 11, 4)->nullable();
            $table->decimal('TAXIGVUSD', 11, 4)->nullable();
            $table->decimal('TAXISCPEN', 11, 4)->nullable();
            $table->decimal('TAXISCUSD', 11, 4)->nullable();
            $table->decimal('TOTALNOTAFFECTPEN', 11, 4)->nullable();
            $table->decimal('TOTALNOTAFFECTUSD', 11, 4)->nullable();
            $table->decimal('PORCENTDISCOUNT1', 5)->nullable();
            $table->decimal('PORCENTDISCOUNT2', 5)->nullable();
            $table->decimal('TOTDISCOUNTPEN', 11, 4)->nullable();
            $table->decimal('TOTDISCOUNTUSD', 11, 4)->nullable();
            $table->decimal('TOTRETURNEDPEN', 11, 4)->nullable();
            $table->decimal('TOTRETURNEDUSD', 11, 4)->nullable();
            $table->decimal('TOTCASHPEN', 11, 4)->nullable();
            $table->decimal('TOTCASHUSD', 11, 4)->nullable();
            $table->string('CUSTIDSS', 20)->nullable();
            $table->string('TAXREGNBR', 20)->nullable();
            $table->string('CUSTNAME', 40)->nullable();
            $table->string('PLACA', 10)->nullable();
            $table->decimal('NBRBONUS', 10, 0)->nullable();
            $table->string('CURYTYPEID', 6)->nullable();
            $table->float('CURYRATE');
            $table->boolean('STKCLOSEDZ');
            $table->boolean('STKCLOSEDX');
            $table->char('PROMOTIONCARDID', 20)->nullable();
            $table->smallInteger('POINTNUMBER');
            $table->string('SALESPOINT', 10)->nullable();
            $table->integer('KILOMETRAJE')->nullable();
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_salestmp');
    }
};
