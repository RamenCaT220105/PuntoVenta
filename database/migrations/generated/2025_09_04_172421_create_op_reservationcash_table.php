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
        Schema::create('op_reservationcash', function (Blueprint $table) {
            $table->dateTime('DATEPROCE');
            $table->char('SALESPOINT', 10)->nullable();
            $table->char('SALESPERID', 20)->nullable();
            $table->dateTime('DATEDOC');
            $table->boolean('STKCLSEDX');
            $table->char('CURYID', 3)->nullable();
            $table->decimal('TOTALPEN', 11, 4)->nullable();
            $table->decimal('TOTALUSD', 11, 4)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->bigInteger('USER3')->nullable();
            $table->bigInteger('USER4')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->decimal('ID', 18, 0)->nullable();
            $table->string('DESCRIPCION', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_reservationcash');
    }
};
