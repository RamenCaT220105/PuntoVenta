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
        Schema::create('in_vendorinvt', function (Blueprint $table) {
            $table->char('VENDIDSS', 20)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->string('BUYCOD', 20)->nullable();
            $table->string('DESCR', 60)->nullable();
            $table->decimal('STDCOST', 8, 4)->nullable();
            $table->string('CURYID', 3)->nullable();
            $table->dateTime('BUYDATE')->nullable();
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
        Schema::dropIfExists('in_vendorinvt');
    }
};
