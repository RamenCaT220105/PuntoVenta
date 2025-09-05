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
        Schema::create('in_competitionprice', function (Blueprint $table) {
            $table->char('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCE');
            $table->char('INVTIDSKU', 20)->nullable();
            $table->decimal('PRICESUGGESTED', 8, 4)->nullable();
            $table->decimal('PRICECURRENT', 8, 4)->nullable();
            $table->decimal('PRICEPREVIOUS', 8, 4)->nullable();
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
        Schema::dropIfExists('in_competitionprice');
    }
};
