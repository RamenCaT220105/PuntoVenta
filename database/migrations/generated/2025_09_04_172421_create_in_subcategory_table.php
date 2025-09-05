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
        Schema::create('in_subcategory', function (Blueprint $table) {
            $table->char('CLASSUBID', 5)->nullable();
            $table->string('CLASSID', 5)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->string('TYPEDOCFISIN', 5)->nullable();
            $table->string('TYPEDOCFISOUT', 5)->nullable();
            $table->decimal('PORCENTDIFFERENCE', 5)->nullable();
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
            $table->binary('ICONO')->nullable();
            $table->string('RUTA_ICONO', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_subcategory');
    }
};
