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
        Schema::create('customer', function (Blueprint $table) {
            $table->string('CUSTIDSS', 20)->nullable();
            $table->char('DIAPAGID', 10)->nullable();
            $table->char('TERMIDSUM', 2)->nullable();
            $table->string('CUSTID', 20)->nullable();
            $table->string('TAXREGNBR', 20)->nullable();
            $table->string('CUSTNAME', 200)->nullable();
            $table->string('ADDR1', 200)->nullable();
            $table->string('ADDR2', 40)->nullable();
            $table->char('PHONE', 10)->nullable();
            $table->char('FAX', 10)->nullable();
            $table->char('CUSTZONEID', 2)->nullable();
            $table->char('COUNTRYID', 3)->nullable();
            $table->char('STATEID', 2)->nullable();
            $table->char('CITYID', 3)->nullable();
            $table->char('CUSTCLASSID', 2)->nullable();
            $table->char('TAXID1', 2)->nullable();
            $table->string('TAXID2', 2)->nullable();
            $table->string('CURYTYPEID', 6)->nullable();
            $table->char('TERMIDDOC', 2)->nullable();
            $table->dateTime('DATEORIG')->nullable();
            $table->dateTime('DATEPROC');
            $table->integer('DAYGRACE');
            $table->string('CURYID', 3)->nullable();
            $table->string('SALESPERID', 20)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->char('CUSTSTATUSID', 1)->nullable();
            $table->decimal('MTOTOTLIMIT', 11, 4)->nullable();
            $table->decimal('TOTCURRBAL', 11, 4)->nullable();
            $table->boolean('AFFECT')->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->decimal('DECSPORC', 18, 4)->nullable();
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
            $table->string('CUSTNAMESEND', 200)->nullable();
            $table->string('EMAIL', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
