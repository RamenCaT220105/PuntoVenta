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
        Schema::create('dcinkdxhist74', function (Blueprint $table) {
            $table->smallInteger('YEARHIST')->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->decimal('QTYEND03', 10, 3)->nullable();
            $table->decimal('QTYEND04', 10, 3)->nullable();
            $table->decimal('QTYEND05', 10, 3)->nullable();
            $table->decimal('AVGPEN03', 8, 4)->nullable();
            $table->decimal('AVGPEN04', 8, 4)->nullable();
            $table->decimal('AVGUSD03', 8, 4)->nullable();
            $table->decimal('AVGUSD04', 8, 4)->nullable();
            $table->decimal('TOTAVGPEN03', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN04', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD03', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD04', 11, 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcinkdxhist74');
    }
};
