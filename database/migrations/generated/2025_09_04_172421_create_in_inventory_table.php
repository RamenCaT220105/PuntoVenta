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
        Schema::create('in_inventory', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('CODMARCA', 5)->nullable();
            $table->string('TAXISC', 2)->nullable();
            $table->string('TAXIGV', 2)->nullable();
            $table->string('CLASSID', 5)->nullable();
            $table->char('CLASSUBID', 5)->nullable();
            $table->char('INVTYPEID', 5)->nullable();
            $table->string('STKUNITID', 5)->nullable();
            $table->string('DESCR', 55)->nullable();
            $table->decimal('WTSTK1', 7, 3)->nullable();
            $table->boolean('STKFUELS');
            $table->boolean('STKSTORE');
            $table->boolean('STKOTHER');
            $table->boolean('STKITEM');
            $table->boolean('KIT');
            $table->decimal('DISCMARGIN', 5)->nullable();
            $table->boolean('STKRECEPT');
            $table->boolean('STKSALES');
            $table->boolean('STATUS');
            $table->boolean('CONSIGNMENT');
            $table->boolean('DISASSEMBLE');
            $table->string('USERID', 20)->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->integer('descporc')->nullable();
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 34)->nullable();
            $table->integer('USER3')->nullable();
            $table->dateTime('USER4')->nullable();
            $table->dateTime('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->binary('icono')->nullable();
            $table->string('ruta_icono', 100)->nullable();
            $table->smallInteger('COMBINACION')->nullable();
            $table->char('CLASSID_REF', 5)->nullable();
            $table->char('CLASSUBID_REF', 5)->nullable();
            $table->smallInteger('COMBINACION_MAXIMO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_inventory');
    }
};
