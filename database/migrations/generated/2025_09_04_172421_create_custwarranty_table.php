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
        Schema::create('custwarranty', function (Blueprint $table) {
            $table->string('CUSTIDSS', 20)->nullable();
            $table->char('CUSTWARRANTYTYPEID', 2)->nullable();
            $table->decimal('TOTGAR', 11, 4)->nullable();
            $table->string('DESCRGAR', 40)->nullable();
            $table->dateTime('EXPIREDATE');
            $table->string('CURYID', 3)->nullable();
            $table->string('USERID', 20)->nullable();
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
        Schema::dropIfExists('custwarranty');
    }
};
