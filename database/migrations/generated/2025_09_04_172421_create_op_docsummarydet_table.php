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
        Schema::create('op_docsummarydet', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('DOCSUMMARYTYPEID', 2)->nullable();
            $table->integer('NBRDOCSUMMARY');
            $table->smallInteger('SEQUENCE');
            $table->string('CURYTYPEID', 6)->nullable();
            $table->string('CURYID', 3)->nullable();
            $table->string('TAXID02', 2)->nullable();
            $table->string('TAXID01', 2)->nullable();
            $table->decimal('DISCOUNT', 12)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->float('SLS_PRICE');
            $table->float('QTY');
            $table->float('TOTALPEN');
            $table->float('TOTALUSD');
            $table->float('SUBTOTALPEN');
            $table->float('SUBTOTALUSD');
            $table->float('TAXPEN');
            $table->float('TAXUSD');
            $table->string('USERID', 20)->nullable();
            $table->dateTime('DOCDATE');
            $table->char('INVTIDSOLOMON', 20)->nullable();
            $table->string('CLASSID', 5)->nullable();
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
        Schema::dropIfExists('op_docsummarydet');
    }
};
