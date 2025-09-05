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
        Schema::create('op_side_fuel', function (Blueprint $table) {
            $table->string('SIDE', 2)->nullable();
            $table->tinyInteger('HOSENUMBER');
            $table->string('INVTIDBARR', 20)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->string('USERID', 20)->nullable();
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
        Schema::dropIfExists('op_side_fuel');
    }
};
