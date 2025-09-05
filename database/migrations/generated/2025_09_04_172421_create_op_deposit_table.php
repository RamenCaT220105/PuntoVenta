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
        Schema::create('op_deposit', function (Blueprint $table) {
            $table->decimal('BATNBRDEPOSIT', 10, 0)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->tinyInteger('SALESPERSONTURN');
            $table->dateTime('OPDATE');
            $table->dateTime('DATEPROCE');
            $table->boolean('STATUS')->nullable();
            $table->char('SALESPERID', 20)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->bigInteger('USER3')->nullable();
            $table->bigInteger('USER4')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->char('SALESPOINT', 10)->nullable();
            $table->string('DESCRIPCION', 50)->nullable();
            $table->integer('STKCLSEDX')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_deposit');
    }
};
