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
        Schema::create('dtos_cliente', function (Blueprint $table) {
            $table->string('RUC', 11)->nullable();
            $table->string('RZSOCIAL', 200)->nullable();
            $table->integer('CODETDOC')->nullable();
            $table->string('NOM_COMERCIAL', 150)->nullable();
            $table->string('CODEPAIS', 4)->nullable();
            $table->string('CODEDEPA', 4)->nullable();
            $table->string('DEPARTAMENTO', 50)->nullable();
            $table->string('CODEPROV', 6)->nullable();
            $table->string('PROVINCIA', 50)->nullable();
            $table->string('CODEDIST', 8)->nullable();
            $table->string('DISTRITO', 50)->nullable();
            $table->string('URBANIZACION', 200)->nullable();
            $table->string('CORREO', 60)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtos_cliente');
    }
};
