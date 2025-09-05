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
        Schema::create('se_accessdetrights', function (Blueprint $table) {
            $table->string('USERID', 20)->nullable();
            $table->string('SCREENID', 7)->nullable();
            $table->boolean('VIEWRIGHTS');
            $table->boolean('INSERTRIGHTS');
            $table->boolean('UPDATERIGHTS');
            $table->boolean('DELETERIGHTS');
            $table->boolean('PRINTRIGHTS');
            $table->boolean('NULLRIGHTS');
            $table->boolean('CLOSERIGHTS');
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
        Schema::dropIfExists('se_accessdetrights');
    }
};
