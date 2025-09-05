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
        Schema::create('dcinventorydat74', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->float('STOCKMIN')->nullable();
            $table->float('STOCKMAX')->nullable();
            $table->float('STOCKSTAR')->nullable();
            $table->float('QTYAVAIL')->nullable();
            $table->timestamp('STARTDATEINV')->nullable();
            $table->timestamp('ENDDATEINV')->nullable();
            $table->float('LASTINVFIS')->nullable();
            $table->float('AVGCOSTPEN')->nullable();
            $table->float('AVGCOSTUSD')->nullable();
            $table->float('STDCOSTPEN')->nullable();
            $table->float('STDCOSTUSD')->nullable();
            $table->float('LASTSTDCOSTPEN')->nullable();
            $table->float('LASTSTDCOSTUSD')->nullable();
            $table->float('SLS_PRICE')->nullable();
            $table->timestamp('LASTDAYIN')->nullable();
            $table->timestamp('LASTDAYOU')->nullable();
            $table->string('PRECLVID', 5)->nullable();
            $table->string('INVTIDSTK', 20)->nullable();
            $table->string('INVTIDNOSTK', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcinventorydat74');
    }
};
