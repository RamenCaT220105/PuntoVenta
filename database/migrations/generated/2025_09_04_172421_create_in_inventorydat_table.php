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
        Schema::create('in_inventorydat', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->decimal('STOCKMIN', 10, 3)->nullable();
            $table->decimal('STOCKMAX', 10, 3)->nullable();
            $table->decimal('STOCKSTAR', 10, 3)->nullable();
            $table->decimal('QTYAVAIL', 20, 6)->nullable();
            $table->dateTime('STARTDATEINV')->nullable();
            $table->dateTime('ENDDATEINV')->nullable();
            $table->float('LASTINVFIS')->nullable();
            $table->float('AVGCOSTPEN');
            $table->decimal('AVGCOSTUSD', 8, 4)->nullable();
            $table->decimal('STDCOSTPEN', 8, 4)->nullable();
            $table->decimal('STDCOSTUSD', 8, 4)->nullable();
            $table->decimal('LASTSTDCOSTPEN', 8, 4)->nullable();
            $table->decimal('LASTSTDCOSTUSD', 8, 4)->nullable();
            $table->float('SLS_PRICE');
            $table->dateTime('LASTDAYIN')->nullable();
            $table->decimal('LASTDAYOU', 10, 0)->nullable();
            $table->string('PRECLVID', 5)->nullable();
            $table->char('INVTIDSTK', 20)->nullable();
            $table->char('INVTIDNOSTK', 20)->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->dateTime('USER4')->nullable();
            $table->dateTime('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_inventorydat');
    }
};
