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
        Schema::create('in_category', function (Blueprint $table) {
            $table->string('CLASSID', 5)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->char('BUSINESSTYPE', 1)->nullable();
            $table->char('INVTIDSOLOMON', 20)->nullable();
            $table->string('DESCRSPANISH', 40)->nullable();
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
            $table->string('printer_port', 50)->nullable();
            $table->integer('MOSTRAR_CSTORE')->nullable();
            $table->binary('icono')->nullable();
            $table->string('ruta_icono', 100)->nullable();
            $table->smallInteger('COMBINACION')->nullable();
            $table->string('CLASSID_REF', 5)->nullable();
            $table->string('CLASSUBID_REF', 5)->nullable();
            $table->smallInteger('COMBINACION_MAXIMO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_category');
    }
};
