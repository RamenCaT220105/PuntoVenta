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
        Schema::create('in_resu_intraitem', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('BATNBR', 10)->nullable();
            $table->string('TYPEDOCID', 5)->nullable();
            $table->string('CLASSID', 20)->nullable();
            $table->decimal('QTY', 10, 3)->nullable();
            $table->decimal('COSTPEN', 8, 4)->nullable();
            $table->decimal('COSTUSD', 8, 4)->nullable();
            $table->decimal('TOTALPEN', 11, 4)->nullable();
            $table->decimal('TOTALUSD', 11, 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_resu_intraitem');
    }
};
