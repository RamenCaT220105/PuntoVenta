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
        Schema::create('op_loadsalesorddet', function (Blueprint $table) {
            $table->decimal('NBRLOADSALE', 10, 0)->nullable();
            $table->smallInteger('SEQUENCE');
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->decimal('TAXIGV', 11, 4)->nullable();
            $table->decimal('SLS_PRICE', 11, 4)->nullable();
            $table->decimal('QTY', 10, 3)->nullable();
            $table->decimal('OPTRTOTDET', 11, 4)->nullable();
            $table->decimal('STDCOSTPEN', 8, 4)->nullable();
            $table->decimal('STRCOSTUSD', 8, 4)->nullable();
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
        Schema::dropIfExists('op_loadsalesorddet');
    }
};
