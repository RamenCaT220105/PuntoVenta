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
        Schema::create('op_summarysales', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCE');
            $table->string('COMMENT', 40)->nullable();
            $table->boolean('STATUS');
            $table->float('TOTALPEN');
            $table->char('USERID', 20)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->float('USER3')->nullable();
            $table->float('USER4')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_summarysales');
    }
};
