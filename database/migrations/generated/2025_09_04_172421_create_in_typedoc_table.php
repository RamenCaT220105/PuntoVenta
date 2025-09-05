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
        Schema::create('in_typedoc', function (Blueprint $table) {
            $table->string('TYPEDOCID', 5)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->boolean('INOUT');
            $table->boolean('STKVALUE');
            $table->boolean('STKCOSPRICE');
            $table->boolean('STKAVGCOST');
            $table->string('PRECLVLID', 5)->nullable();
            $table->boolean('STKBUY');
            $table->boolean('STKVENDOR');
            $table->boolean('STKAVERAGE');
            $table->char('DESCR_ABR', 12)->nullable();
            $table->char('STKDISPLAY', 1)->nullable();
            $table->char('MODBUY', 1)->nullable();
            $table->char('MODCXP', 1)->nullable();
            $table->char('MODINV', 1)->nullable();
            $table->char('TYPEINV', 3)->nullable();
            $table->char('ACCT', 30)->nullable();
            $table->char('SUB', 30)->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->bigInteger('USER3')->nullable();
            $table->bigInteger('USER4')->nullable();
            $table->string('USER5', 30)->nullable();
            $table->string('USER6', 30)->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->bigInteger('USER8')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_typedoc');
    }
};
