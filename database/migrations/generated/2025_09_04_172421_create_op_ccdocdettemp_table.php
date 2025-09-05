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
        Schema::create('op_ccdocdettemp', function (Blueprint $table) {
            $table->char('DOCSUMMARYTTYPEID', 2)->nullable();
            $table->decimal('REFERENCE', 10, 0)->nullable();
            $table->smallInteger('SEQUENCE');
            $table->string('TAXREGNBR', 20)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->decimal('NBRDOCUMENT', 10, 0)->nullable();
            $table->float('CURYRATE');
            $table->decimal('PAIDMENTPEN', 11, 4)->nullable();
            $table->decimal('PAIDMENTUSD', 11, 4)->nullable();
            $table->dateTime('DATEPROCEPAIDMENT');
            $table->char('BANKID', 2)->nullable();
            $table->char('CHEQNUMBER', 15)->nullable();
            $table->char('NBRBANKACCOUNT', 15)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
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
        Schema::dropIfExists('op_ccdocdettemp');
    }
};
