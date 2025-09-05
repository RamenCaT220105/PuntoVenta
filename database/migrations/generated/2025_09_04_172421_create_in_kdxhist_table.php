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
        Schema::create('in_kdxhist', function (Blueprint $table) {
            $table->smallInteger('YEARHIST');
            $table->string('SITEID', 5)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->decimal('QTYEND00', 10, 3)->nullable();
            $table->decimal('QTYEND01', 10, 3)->nullable();
            $table->decimal('QTYEND02', 10, 3)->nullable();
            $table->decimal('QTYEND03', 10, 3)->nullable();
            $table->decimal('QTYEND04', 10, 3)->nullable();
            $table->decimal('QTYEND05', 10, 3)->nullable();
            $table->decimal('QTYEND06', 10, 3)->nullable();
            $table->decimal('QTYEND07', 10, 3)->nullable();
            $table->decimal('QTYEND08', 10, 3)->nullable();
            $table->decimal('QTYEND09', 10, 3)->nullable();
            $table->decimal('QTYEND10', 10, 3)->nullable();
            $table->decimal('QTYEND11', 10, 3)->nullable();
            $table->decimal('QTYEND12', 10, 3)->nullable();
            $table->decimal('QTYEND13', 10, 3)->nullable();
            $table->decimal('AVGPEN00', 8, 4)->nullable();
            $table->decimal('AVGPEN01', 8, 4)->nullable();
            $table->decimal('AVGPEN02', 8, 4)->nullable();
            $table->decimal('AVGPEN03', 8, 4)->nullable();
            $table->decimal('AVGPEN04', 8, 4)->nullable();
            $table->decimal('AVGPEN06', 8, 4)->nullable();
            $table->decimal('AVGPEN05', 8, 4)->nullable();
            $table->decimal('AVGPEN07', 8, 4)->nullable();
            $table->decimal('AVGPEN08', 8, 4)->nullable();
            $table->decimal('AVGPEN09', 8, 4)->nullable();
            $table->decimal('AVGPEN10', 8, 4)->nullable();
            $table->decimal('AVGPEN11', 8, 4)->nullable();
            $table->decimal('AVGPEN12', 8, 4)->nullable();
            $table->decimal('AVGPEN13', 8, 4)->nullable();
            $table->decimal('AVGUSD00', 8, 4)->nullable();
            $table->decimal('AVGUSD01', 8, 4)->nullable();
            $table->decimal('AVGUSD02', 8, 4)->nullable();
            $table->decimal('AVGUSD03', 8, 4)->nullable();
            $table->decimal('AVGUSD04', 8, 4)->nullable();
            $table->decimal('AVGUSD05', 8, 4)->nullable();
            $table->decimal('AVGUSD06', 8, 4)->nullable();
            $table->decimal('AVGUSD07', 8, 4)->nullable();
            $table->decimal('AVGUSD08', 8, 4)->nullable();
            $table->decimal('AVGUSD09', 8, 4)->nullable();
            $table->decimal('AVGUSD10', 8, 4)->nullable();
            $table->decimal('AVGUSD11', 8, 4)->nullable();
            $table->decimal('AVGUSD12', 8, 4)->nullable();
            $table->decimal('AVGUSD13', 8, 4)->nullable();
            $table->decimal('TOTAVGPEN00', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN01', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN02', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN03', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN04', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN05', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN06', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN07', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN08', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN09', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN10', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN11', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN12', 11, 4)->nullable();
            $table->decimal('TOTAVGPEN13', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD00', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD01', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD02', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD03', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD04', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD05', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD06', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD07', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD08', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD09', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD10', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD11', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD12', 11, 4)->nullable();
            $table->decimal('TOTAVGUSD13', 11, 4)->nullable();
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
        Schema::dropIfExists('in_kdxhist');
    }
};
