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
        Schema::create('pagodelivery_det', function (Blueprint $table) {
            $table->integer('CORRNBR');
            $table->integer('FORMAPAGO')->nullable();
            $table->string('TTARJETA', 30)->nullable();
            $table->integer('NTARJETA')->nullable();
            $table->integer('SOLEDOLARE')->nullable();
            $table->decimal('MONTOEFECTIVO', 11, 4)->nullable();
            $table->string('SALESPOINT', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagodelivery_det');
    }
};
