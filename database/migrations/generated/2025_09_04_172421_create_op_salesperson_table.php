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
        Schema::create('op_salesperson', function (Blueprint $table) {
            $table->string('SALESPERID', 20)->nullable();
            $table->string('SALESPERNAME', 40)->nullable();
            $table->char('IDENTITYDOC', 10)->nullable();
            $table->char('PHONE', 30)->nullable();
            $table->char('SEX', 1)->nullable();
            $table->dateTime('INITIALDATE');
            $table->string('SITEID', 5)->nullable();
            $table->string('ADDRESS1', 40)->nullable();
            $table->string('ADDRESS2', 40)->nullable();
            $table->char('PASSWORD', 12)->nullable();
            $table->dateTime('BIRTHDATE');
            $table->string('BIRTHADDRESS1', 40)->nullable();
            $table->string('BIRTHADDRESS2', 40)->nullable();
            $table->char('STATUSPERSONID', 2)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->string('ACCESSUSERID', 20)->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER01', 30)->nullable();
            $table->string('USER02', 30)->nullable();
            $table->bigInteger('USER03')->nullable();
            $table->bigInteger('USER04')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->tinyInteger('Conectado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_salesperson');
    }
};
