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
        Schema::create('comment', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->string('TYPEDOCID', 5)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->char('BATNBR', 10)->nullable();
            $table->timestamp('DATEPROCE')->useCurrentOnUpdate()->useCurrent();
            $table->string('COMMENT1', 100)->nullable();
            $table->string('COMMENT2', 100)->nullable();
            $table->string('COMMENT3', 100)->nullable();
            $table->boolean('RLSED');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->bigInteger('USER3')->nullable();
            $table->bigInteger('USER4')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
