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
        Schema::create('op_card_mont', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('CARDID', 2)->nullable();
            $table->dateTime('DATEPOS');
            $table->dateTime('DATEPROCE');
            $table->string('CURYID', 3)->nullable();
            $table->float('TOTALCARD');
            $table->boolean('STATUS');
            $table->mediumText('COMMENT')->nullable();
            $table->string('USERID', 20)->nullable();
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
        Schema::dropIfExists('op_card_mont');
    }
};
