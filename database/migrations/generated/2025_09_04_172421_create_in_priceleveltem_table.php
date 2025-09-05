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
        Schema::create('in_priceleveltem', function (Blueprint $table) {
            $table->integer('BATNBRPRICELEVELTEM');
            $table->string('SITEID', 5)->nullable();
            $table->string('SITEIDSOURCE', 5)->nullable();
            $table->string('USERIDAUTORIZED01', 20)->nullable();
            $table->dateTime('DATETIMEAUTORIZED01');
            $table->string('USERIDAUTORIZED02', 20)->nullable();
            $table->dateTime('DATETIMEAUTORIZED02');
            $table->string('PRECLVID', 5)->nullable();
            $table->boolean('STKPRICESS');
            $table->dateTime('STARTDATEPRICE');
            $table->dateTime('ENDDATEPRICE');
            $table->char('STARTTIMEPRICE', 5)->nullable();
            $table->char('ENDTIMEPRICE', 5)->nullable();
            $table->boolean('STATUS');
            $table->boolean('STKPRICESEND');
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
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
        Schema::dropIfExists('in_priceleveltem');
    }
};
