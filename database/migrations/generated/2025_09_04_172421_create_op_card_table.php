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
        Schema::create('op_card', function (Blueprint $table) {
            $table->char('CARDID', 2)->nullable();
            $table->char('ACCOUNT', 12)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->tinyInteger('NUMBERORDER');
            $table->char('CARDADJUST', 2)->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER01', 30)->nullable();
            $table->string('USER02', 30)->nullable();
            $table->bigInteger('USER03')->nullable();
            $table->bigInteger('USER04')->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_card');
    }
};
