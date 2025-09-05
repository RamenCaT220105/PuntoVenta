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
        Schema::create('op_custinvt', function (Blueprint $table) {
            $table->char('CUSTIDSS', 20)->nullable();
            $table->char('INVTIDSKU', 20)->nullable();
            $table->char('DESCRP', 50)->nullable();
            $table->char('DESCU', 2)->nullable();
            $table->decimal('PORCDESC', 18)->nullable();
            $table->boolean('MONTPORC')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_custinvt');
    }
};
