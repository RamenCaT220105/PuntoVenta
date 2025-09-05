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
        Schema::create('op_ticketform', function (Blueprint $table) {
            $table->string('HEAD1', 40)->nullable();
            $table->string('HEAD2', 40)->nullable();
            $table->string('HEAD3', 40)->nullable();
            $table->string('HEAD4', 40)->nullable();
            $table->string('HEAD5', 40)->nullable();
            $table->string('HEAD6', 40)->nullable();
            $table->string('HEAD7', 40)->nullable();
            $table->string('HEAD8', 40)->nullable();
            $table->string('HEAD9', 40)->nullable();
            $table->string('HEAD10', 40)->nullable();
            $table->string('LINES1', 40)->nullable();
            $table->string('LINES2', 40)->nullable();
            $table->string('LINES3', 40)->nullable();
            $table->string('LINES4', 40)->nullable();
            $table->string('FOOT1', 40)->nullable();
            $table->string('FOOT2', 40)->nullable();
            $table->string('FOOT3', 40)->nullable();
            $table->string('FOOT4', 40)->nullable();
            $table->string('FOOT5', 40)->nullable();
            $table->string('FOOT6', 40)->nullable();
            $table->string('FOOT7', 40)->nullable();
            $table->string('FOOT8', 40)->nullable();
            $table->string('FOOT9', 40)->nullable();
            $table->string('FOOT10', 40)->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_ticketform');
    }
};
