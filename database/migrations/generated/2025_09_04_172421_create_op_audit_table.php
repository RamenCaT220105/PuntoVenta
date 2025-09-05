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
        Schema::create('op_audit', function (Blueprint $table) {
            $table->string('USERID', 20)->nullable();
            $table->dateTime('DATEORI')->nullable();
            $table->dateTime('DATEPROCE')->nullable();
            $table->dateTime('DATEAUDIT')->nullable();
            $table->integer('AUDITID')->nullable();
            $table->string('OBSERVATION', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_audit');
    }
};
