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
        Schema::create('op_setup_fe_telemovil', function (Blueprint $table) {
            $table->tinyInteger('MODE')->nullable();
            $table->string('URL_TEST', 500)->nullable();
            $table->string('ACCESS_KEY_TEST', 200)->nullable();
            $table->string('SECRET_KEY_TEST', 200)->nullable();
            $table->string('URL_PROD', 500)->nullable();
            $table->string('ACCESS_KEY_PROD', 200)->nullable();
            $table->string('SECRET_KEY_PROD', 200)->nullable();
            $table->string('ERRORMSG', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_setup_fe_telemovil');
    }
};
