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
        Schema::create('op_salescard', function (Blueprint $table) {
            $table->string('DOCTYPEID', 3)->nullable();
            $table->integer('NBRDOCUMENT');
            $table->char('SITEID', 5)->nullable();
            $table->smallInteger('SEQUENCE');
            $table->char('CARDID', 2)->nullable();
            $table->char('NBRCARD', 20)->nullable();
            $table->decimal('TOTCARDPEN', 11, 4)->nullable();
            $table->float('TOTCARDUSD');
            $table->string('CURYID', 3)->nullable();
            $table->dateTime('DATEPROCESALES');
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
        Schema::dropIfExists('op_salescard');
    }
};
