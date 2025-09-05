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
        Schema::create('in_kitcomponent', function (Blueprint $table) {
            $table->string('KITID', 20)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->tinyInteger('SEQUENCE');
            $table->decimal('STDCOSTPEN', 8, 4)->nullable();
            $table->decimal('STDCOSTUSD', 8, 4)->nullable();
            $table->decimal('QTY', 20, 6)->nullable();
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
        Schema::dropIfExists('in_kitcomponent');
    }
};
