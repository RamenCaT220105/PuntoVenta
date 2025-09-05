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
        Schema::create('desccombos', function (Blueprint $table) {
            $table->integer('ID_COMBO');
            $table->longText('DESCRIPCION')->nullable();
            $table->char('ID_RELACION', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desccombos');
    }
};
