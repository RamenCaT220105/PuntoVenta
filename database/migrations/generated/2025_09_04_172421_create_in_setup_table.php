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
        Schema::create('in_setup', function (Blueprint $table) {
            $table->string('PERPOST', 6)->nullable();
            $table->string('INTYPETRANSFERIN', 5)->nullable();
            $table->string('INTYPETRANSFEROUT', 5)->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->string('REPORTPATH', 100)->nullable();
            $table->string('INTYPESALES', 5)->nullable();
            $table->string('INTYPEDESIN', 5)->nullable();
            $table->string('INTYPEDESOUT', 5)->nullable();
            $table->string('INTYPECREDMEM', 5)->nullable();
            $table->string('INTYPEBONUS', 5)->nullable();
            $table->string('INTYPEFISIN', 5)->nullable();
            $table->string('INTYPEFISOUT', 5)->nullable();
            $table->string('INTYPETRBUYSTORE', 5)->nullable();
            $table->string('INTYPETRBUYFUELS', 5)->nullable();
            $table->string('INTYPEREVBUYFUELS', 5)->nullable();
            $table->string('INTYPEREVBUYSTORE', 5)->nullable();
            $table->char('BATNBRTYPEDOC', 10)->nullable();
            $table->char('BATNBRTYPEPRICE', 10)->nullable();
            $table->boolean('STKFISI');
            $table->string('INTYPEQTYINI', 5)->nullable();
            $table->boolean('STKSTOCK');
            $table->string('DOCTYPEIDFIS', 3)->nullable();
            $table->string('IDVENDORSS', 20)->nullable();
            $table->char('CLOSEDMONTH', 6)->nullable();
            $table->boolean('STKNEW');
            $table->string('INVTIDSKUROUND', 20)->nullable();
            $table->float('PERCENTROUND');
            $table->string('PDTPATH', 400)->nullable();
            $table->integer('ACTIVEPDTPATH')->nullable();
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->timestamp('USER4')->nullable();
            $table->timestamp('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->char('SKUROUND', 20)->nullable();
            $table->float('MAXROUNDINV')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_setup');
    }
};
