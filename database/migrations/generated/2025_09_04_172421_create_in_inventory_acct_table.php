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
        Schema::create('in_inventory_acct', function (Blueprint $table) {
            $table->string('TYPEDOCID', 5)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->char('ACCT', 30)->nullable();
            $table->char('SUB', 30)->nullable();
            $table->char('BUSINESSTYPE', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_inventory_acct');
    }
};
