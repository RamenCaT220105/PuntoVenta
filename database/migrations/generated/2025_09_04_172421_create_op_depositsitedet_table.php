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
        Schema::create('op_depositsitedet', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->integer('BATNBRDEPOSITSITE');
            $table->dateTime('DATEPROCE');
            $table->smallInteger('SEQUENCE');
            $table->string('CUSTIDSS', 20)->nullable();
            $table->char('DEPOSITPASSWORD', 20)->nullable();
            $table->dateTime('DATEDEPOSIT');
            $table->char('CURYID', 3)->nullable();
            $table->float('CURYRATE');
            $table->decimal('TOTALPEN', 11, 4)->nullable();
            $table->decimal('TOTALUSD', 11, 4)->nullable();
            $table->boolean('DEBEHABER');
            $table->boolean('STATUS')->nullable();
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
        Schema::dropIfExists('op_depositsitedet');
    }
};
