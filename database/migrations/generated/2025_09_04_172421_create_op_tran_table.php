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
        Schema::create('op_tran', function (Blueprint $table) {
            $table->char('NUMERO', 4)->nullable();
            $table->char('SOLES', 9)->nullable();
            $table->char('PRODUCTO', 5)->nullable();
            $table->char('PRECIO', 9)->nullable();
            $table->char('GALONES', 9)->nullable();
            $table->char('CARA', 2)->nullable();
            $table->char('FECHA', 6)->nullable();
            $table->char('HORA', 4)->nullable();
            $table->char('TURNO', 1)->nullable();
            $table->char('ESTADO', 10)->nullable();
            $table->decimal('DOCUMENTO', 10, 0)->nullable();
            $table->dateTime('DATEPROCE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_tran');
    }
};
