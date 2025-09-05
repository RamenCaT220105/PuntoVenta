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
        Schema::create('in_summary_intraitem', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('BATNBR', 10)->nullable();
            $table->string('TYPEDOCID', 5)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->char('INVTIDSOLOMON', 20)->nullable();
            $table->dateTime('INTRDATEPROCE');
            $table->decimal('QTY', 10, 3)->nullable();
            $table->decimal('STDCOSTPEN', 8, 4)->nullable();
            $table->decimal('STDCOSTUSD', 8, 4)->nullable();
            $table->decimal('INTRSUBTOTPEN', 11, 4)->nullable();
            $table->decimal('INTRSUBTOTUSD', 11, 4)->nullable();
            $table->boolean('STATUS');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_summary_intraitem');
    }
};
