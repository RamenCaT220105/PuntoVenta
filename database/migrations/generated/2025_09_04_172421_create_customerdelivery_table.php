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
        Schema::create('customerdelivery', function (Blueprint $table) {
            $table->char('CUSTIDSS', 20)->nullable();
            $table->string('nombre', 30)->nullable();
            $table->decimal('telefono', 15, 0)->nullable();
            $table->string('direccion', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customerdelivery');
    }
};
