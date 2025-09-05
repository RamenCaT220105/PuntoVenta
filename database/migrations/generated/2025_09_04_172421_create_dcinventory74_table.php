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
        Schema::create('dcinventory74', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('TAXISC', 2)->nullable();
            $table->string('TAXIGV', 2)->nullable();
            $table->string('CLASSID', 5)->nullable();
            $table->char('CLASSUBID', 5)->nullable();
            $table->char('INVTYPEID', 5)->nullable();
            $table->string('STKUNITID', 5)->nullable();
            $table->string('DESCR', 55)->nullable();
            $table->decimal('WTSTK1', 7, 3)->nullable();
            $table->string('STKFUELS')->nullable();
            $table->string('STKSTORE')->nullable();
            $table->string('STKOTHER')->nullable();
            $table->string('STKITEM')->nullable();
            $table->string('KIT')->nullable();
            $table->decimal('DISCMARGIN', 5)->nullable();
            $table->string('STKRECEPT')->nullable();
            $table->string('STKSALES')->nullable();
            $table->string('STATUS')->nullable();
            $table->string('CONSIGNMENT')->nullable();
            $table->string('DISASSEMBLE')->nullable();
            $table->string('USERID', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcinventory74');
    }
};
