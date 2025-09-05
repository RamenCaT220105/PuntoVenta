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
        Schema::create('op_prclvlcust', function (Blueprint $table) {
            $table->string('PRCLVLCUSTID', 10)->nullable();
            $table->char('SITEID', 5)->nullable();
            $table->string('CURYID', 3)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->dateTime('STARTDATEPRICE');
            $table->dateTime('ENDDATEPRICE');
            $table->boolean('STATUS');
            $table->boolean('APPROVA1');
            $table->string('USERIDAPPROVA1', 20)->nullable();
            $table->dateTime('DATETIMEAUTORIZED1');
            $table->boolean('APPROVA2');
            $table->string('USERIDAPPROVA2', 20)->nullable();
            $table->dateTime('DATETIMEAUTORIZED2');
            $table->boolean('STKPRICESEND');
            $table->string('SITEORIG', 5)->nullable();
            $table->boolean('STKPRICESS');
            $table->char('TYPEPRCLVLCUST', 1)->nullable();
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
        Schema::dropIfExists('op_prclvlcust');
    }
};
