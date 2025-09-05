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
        Schema::create('op_ctrlturndet', function (Blueprint $table) {
            $table->integer('BATNBRTURN');
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCES');
            $table->char('NBRTUR', 1)->nullable();
            $table->string('SIDE', 2)->nullable();
            $table->tinyInteger('HOSENUMBER');
            $table->string('INVTIDBARR', 20)->nullable();
            $table->decimal('STARTREADING', 13, 3)->nullable();
            $table->decimal('ENDREADING', 13, 3)->nullable();
            $table->decimal('QTYSALES', 10, 3)->nullable();
            $table->decimal('QTYSERAF', 10, 3)->nullable();
            $table->decimal('QTYOTHER', 10, 3)->nullable();
            $table->decimal('TOTQTY', 10, 3)->nullable();
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
        Schema::dropIfExists('op_ctrlturndet');
    }
};
