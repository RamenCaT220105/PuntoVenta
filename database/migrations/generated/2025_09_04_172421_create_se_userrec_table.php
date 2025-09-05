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
        Schema::create('se_userrec', function (Blueprint $table) {
            $table->string('USERID', 20)->nullable();
            $table->string('USERNAME', 40)->nullable();
            $table->string('EMAILADDRESS', 40)->nullable();
            $table->string('LOCATION', 40)->nullable();
            $table->char('PASSWORD', 12)->nullable();
            $table->char('PHONE', 30)->nullable();
            $table->dateTime('EXPIRED');
            $table->boolean('STATUS');
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
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
        Schema::dropIfExists('se_userrec');
    }
};
