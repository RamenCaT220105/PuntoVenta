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
        Schema::create('dcinventoryalter74', function (Blueprint $table) {
            $table->string('INVTIDBARR', 20)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('STKNEW')->nullable();
            $table->string('STKMODIFY')->nullable();
            $table->string('STKDELETE')->nullable();
            $table->string('STKSEND')->nullable();
            $table->string('STKRECEIVE')->nullable();
            $table->string('USER1')->nullable();
            $table->string('USER2')->nullable();
            $table->string('USER3')->nullable();
            $table->string('USER4')->nullable();
            $table->string('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcinventoryalter74');
    }
};
