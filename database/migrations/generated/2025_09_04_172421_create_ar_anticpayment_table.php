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
        Schema::create('ar_anticpayment', function (Blueprint $table) {
            $table->string('siteid', 5)->nullable();
            $table->string('custidss', 20)->nullable();
            $table->float('totalpen');
            $table->float('totalusd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_anticpayment');
    }
};
