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
        Schema::create('op_salesperson_mesa', function (Blueprint $table) {
            $table->string('SALESPERID', 20)->nullable();
            $table->decimal('MESA', 10)->nullable();
            $table->string('NOM_MES', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_salesperson_mesa');
    }
};
