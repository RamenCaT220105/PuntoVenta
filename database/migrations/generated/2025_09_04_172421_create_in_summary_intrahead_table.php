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
        Schema::create('in_summary_intrahead', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('BATNBR', 10)->nullable();
            $table->string('TYPEDOCID', 5)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->char('REFNBR', 15)->nullable();
            $table->string('VENDIDSS', 20)->nullable();
            $table->string('VENDORID', 20)->nullable();
            $table->char('TERMID', 2)->nullable();
            $table->string('TAXID', 2)->nullable();
            $table->string('CURYTYPEID', 6)->nullable();
            $table->float('CURYRATE');
            $table->string('SITEPROCES', 5)->nullable();
            $table->string('SITEDEST', 5)->nullable();
            $table->dateTime('INTRDATE');
            $table->dateTime('INTRDATEPROCE');
            $table->char('FROMCURYID', 3)->nullable();
            $table->decimal('INTRTAXPEN', 9)->nullable();
            $table->decimal('INTRTAXUSD', 9)->nullable();
            $table->decimal('INTRTOTPEN', 11, 4)->nullable();
            $table->decimal('INTRTOTUSD', 11, 4)->nullable();
            $table->boolean('STATUS');
            $table->char('BUSINESSTYPE', 1)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->boolean('STKPROCECXP');
            $table->char('STKPROCEINV', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_summary_intrahead');
    }
};
