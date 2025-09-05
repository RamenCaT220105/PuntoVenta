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
        Schema::create('ar_ccdoc', function (Blueprint $table) {
            $table->string('DOCTYPEID', 3)->nullable();
            $table->decimal('NBRDOCUMENT', 10, 0)->nullable();
            $table->char('SITEID', 5)->nullable();
            $table->char('DOCSUMMARYTYPEID', 2)->nullable();
            $table->decimal('REFERENCE', 10, 0)->nullable();
            $table->string('CURYTYPEID', 6)->nullable();
            $table->dateTime('DOCDATE');
            $table->dateTime('DATEPROCESALES');
            $table->dateTime('DUEDATE');
            $table->decimal('TOTALPEN', 11, 4)->nullable();
            $table->decimal('TOTALUSD', 11, 4)->nullable();
            $table->decimal('PAIDMENTPEN', 11, 4)->nullable();
            $table->decimal('PAIDMENTUSD', 11, 4)->nullable();
            $table->decimal('DOCVALPEN', 11, 4)->nullable();
            $table->decimal('DOCVALUSD', 11, 4)->nullable();
            $table->string('CUSTIDSS', 20)->nullable();
            $table->string('TAXREGNBR', 20)->nullable();
            $table->char('DOCSTATUSID', 2)->nullable();
            $table->float('CURYRATE');
            $table->string('CURYID', 3)->nullable();
            $table->char('DIAPAGID', 10)->nullable();
            $table->integer('DAYGRACE');
            $table->decimal('NBRBONUS', 10, 0)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
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
        Schema::dropIfExists('ar_ccdoc');
    }
};
