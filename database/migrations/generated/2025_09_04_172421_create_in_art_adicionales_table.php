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
        Schema::create('in_art_adicionales', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('CATEGORIA_REL', 5)->nullable();
            $table->string('DESCRIPCION', 55)->nullable();
            $table->decimal('PRECIO', 12)->nullable();
            $table->boolean('ESTADO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_art_adicionales');
    }
};
