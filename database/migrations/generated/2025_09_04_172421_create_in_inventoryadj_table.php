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
        Schema::create('in_inventoryadj', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('INVTIDSKUADJ', 20)->nullable();
            $table->string('DESCRIPTION', 40)->nullable();
            $table->string('INVTIDBARR', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_inventoryadj');
    }
};
