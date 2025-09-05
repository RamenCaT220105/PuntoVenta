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
        Schema::create('ar_ccdocdet', function (Blueprint $table) {
            $table->integer('BATNBRAR_CCDOCDET');
            $table->string('SITEID', 5)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->integer('NBRDOCUMENT');
            $table->integer('SEQUENCE');
            $table->string('DOCTYPEIDPAID', 3)->nullable();
            $table->decimal('NBRDOCUMENTPAID', 10, 0)->nullable();
            $table->char('DEPOSITPASSWORD', 20)->nullable();
            $table->string('CURYTYPEID', 6)->nullable();
            $table->dateTime('DATEPROCEPAIDMENT');
            $table->float('PAIDMENTPEN');
            $table->float('PAIDMENTUSD');
            $table->string('CURYID', 3)->nullable();
            $table->float('CURYRATE');
            $table->string('CUSTIDSS', 20)->nullable();
            $table->string('TAXREGNBR', 20)->nullable();
            $table->char('DOCSUMMARYTTYPEID', 2)->nullable();
            $table->integer('REFNBR')->nullable();
            $table->string('USERID', 20)->nullable();
            $table->string('DOCSTATUSID', 2)->nullable();
            $table->boolean('STKTRANSFER');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->boolean('STKMODIFY');
            $table->char('STKNEW', 10)->nullable();
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
        Schema::dropIfExists('ar_ccdocdet');
    }
};
