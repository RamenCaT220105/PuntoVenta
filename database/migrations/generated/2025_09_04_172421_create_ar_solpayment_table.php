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
        Schema::create('ar_solpayment', function (Blueprint $table) {
            $table->string('IDCUSTOMER', 20)->nullable();
            $table->char('NBRSOLREFER', 10)->nullable();
            $table->char('TYPE', 3)->nullable();
            $table->integer('NBRDEPOSIT');
            $table->dateTime('DEPOSIDATE');
            $table->dateTime('DATEPROCE');
            $table->float('TOTALPAYMENTPEN');
            $table->float('TOTALPAYMENTUSD');
            $table->float('PAYMENTEFECPEN');
            $table->float('PAYMENTEFECUSD');
            $table->float('DOCBALPEN');
            $table->float('DOCBALUSD');
            $table->string('CURYID', 3)->nullable();
            $table->float('CURYRATE');
            $table->string('CURYTYPEID', 6)->nullable();
            $table->string('SITESOURCE', 5)->nullable();
            $table->boolean('PROCESS');
            $table->string('USER01', 30)->nullable();
            $table->string('USER02', 30)->nullable();
            $table->bigInteger('USER03')->nullable();
            $table->bigInteger('USER04')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_solpayment');
    }
};
