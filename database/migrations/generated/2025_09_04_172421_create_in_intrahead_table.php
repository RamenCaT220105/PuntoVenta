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
        Schema::create('in_intrahead', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('BATNBR', 10)->nullable();
            $table->string('TYPEDOCID', 5)->nullable();
            $table->string('VENDIDSS', 20)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->char('DOCSTATUSID', 2)->nullable();
            $table->char('REFNBR', 15)->nullable();
            $table->float('CURYRATE');
            $table->char('TOCURYID', 3)->nullable();
            $table->char('FROMCURYID', 3)->nullable();
            $table->string('SITEPROCES', 5)->nullable();
            $table->char('NBRORDER', 10)->nullable();
            $table->dateTime('DATENBRORDER')->nullable();
            $table->string('USERIDORDER', 20)->nullable();
            $table->dateTime('INTRDATE');
            $table->dateTime('INTRDATEPROCE');
            $table->string('SITEDEST', 5)->nullable();
            $table->float('INTRTOTPEN');
            $table->float('INTRTAXPEN');
            $table->float('INTRTOTUSD');
            $table->float('INTRTAXUSD');
            $table->string('PERPOST', 6)->nullable();
            $table->boolean('RLSED');
            $table->boolean('DISASSEMBLE');
            $table->decimal('INTRSUBTOTPEN', 11, 4)->nullable();
            $table->decimal('INTRSUBTOTUSD', 11, 4)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USERID', 20)->nullable();
            $table->boolean('STKCLOSED');
            $table->char('BUSINESSTYPE', 1)->nullable();
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->dateTime('USER4')->nullable();
            $table->dateTime('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->dateTime('DATERECEPDOC')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->decimal('INTPERCPEN', 12)->nullable();
            $table->decimal('INTPERCUSD', 12)->nullable();
            $table->decimal('TAXPERC', 12, 4)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_intrahead');
    }
};
