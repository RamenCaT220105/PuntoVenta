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
        Schema::create('ar_ccdoc_payment', function (Blueprint $table) {
            $table->integer('BATNBRAR_CCDOCDET');
            $table->string('SITEID', 5)->nullable();
            $table->string('CUSTIDSS', 20)->nullable();
            $table->char('DEPOSITPASSWORD', 20)->nullable();
            $table->dateTime('DATEDPROCE');
            $table->dateTime('DATEDEPOSIT');
            $table->string('CURYID', 3)->nullable();
            $table->float('TOTALPEN');
            $table->float('TOTALUSD');
            $table->float('DOCBALPEN');
            $table->float('DOCBALUSD');
            $table->string('USERID', 20)->nullable();
            $table->string('DOCTYPEIDPAID', 3)->nullable();
            $table->decimal('NBRDOCUMENTPAID', 10, 0)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->boolean('STKMODIFY');
            $table->boolean('STKNEW');
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
        Schema::dropIfExists('ar_ccdoc_payment');
    }
};
