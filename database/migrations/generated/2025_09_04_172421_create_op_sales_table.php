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
        Schema::create('op_sales', function (Blueprint $table) {
            $table->string('DOCTYPEID', 3)->nullable();
            $table->integer('NBRDOCUMENT');
            $table->char('SITEID', 5)->nullable();
            $table->char('TYPEPAYMENTID', 2)->nullable();
            $table->boolean('STKINVENTORY');
            $table->string('CURYID', 3)->nullable();
            $table->char('DOCSTATUSID', 2)->nullable();
            $table->char('TERMID', 2)->nullable();
            $table->string('SALESPERID', 20)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->dateTime('DATEDOC');
            $table->dateTime('DATEPROCESALES');
            $table->string('PERPOST', 6)->nullable();
            $table->char('TAXIGVID', 2)->nullable();
            $table->char('TAXISCID', 2)->nullable();
            $table->decimal('TOTALPEN', 11, 4)->nullable();
            $table->decimal('TOTALUSD', 11, 4)->nullable();
            $table->decimal('SUBTOTALPEN', 11, 4)->nullable();
            $table->decimal('SUBTOTALUSD', 11, 4)->nullable();
            $table->decimal('TAXIGVPEN', 11, 4)->nullable();
            $table->decimal('TAXIGVUSD', 11, 4)->nullable();
            $table->decimal('TAXISCPEN', 11, 4)->nullable();
            $table->decimal('TAXISCUSD', 11, 4)->nullable();
            $table->decimal('TOTALNOTAFFECTPEN', 11, 4)->nullable();
            $table->decimal('TOTALNOTAFFECTUSD', 11, 4)->nullable();
            $table->decimal('TOTALAFFECTPEN', 11, 4)->nullable();
            $table->decimal('VALORVENTA', 11, 4)->nullable();
            $table->decimal('PORCENTDISCOUNT1', 5)->nullable();
            $table->decimal('PORCENTDISCOUNT2', 5)->nullable();
            $table->decimal('TOTDISCOUNTPEN', 11, 4)->nullable();
            $table->decimal('TOTDISCOUNTUSD', 11, 4)->nullable();
            $table->decimal('TOTRETURNEDPEN', 11, 4)->nullable();
            $table->decimal('TOTRETURNEDUSD', 11, 4)->nullable();
            $table->decimal('TOTCASHPEN', 11, 4)->nullable();
            $table->decimal('TOTCASHUSD', 11, 4)->nullable();
            $table->string('CUSTIDSS', 20)->nullable();
            $table->string('TAXREGNBR', 20)->nullable();
            $table->string('CUSTNAME', 200)->nullable();
            $table->string('PLACA', 10)->nullable();
            $table->decimal('NBRBONUS', 10, 0)->nullable();
            $table->string('CURYTYPEID', 6)->nullable();
            $table->float('CURYRATE');
            $table->boolean('STKCLOSEDZ');
            $table->boolean('STKCLOSEDX');
            $table->char('PROMOTIONCARDID', 20)->nullable();
            $table->smallInteger('POINTNUMBER');
            $table->char('SALESPOINT', 10)->nullable();
            $table->integer('KILOMETRAJE')->nullable();
            $table->char('BUSINESSTYPE', 1)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->dateTime('USER4')->nullable();
            $table->date('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->decimal('TOTPROPINAPEN', 12)->nullable();
            $table->decimal('TOTPROPINAUSD', 12)->nullable();
            $table->string('GLOSA', 40)->nullable();
            $table->char('TIPO_DESCUENTO', 1)->nullable();
            $table->integer('NRO_PACKS')->nullable();
            $table->string('TIPOVENTA', 50)->nullable();
            $table->string('TELEFONO', 50)->nullable();
            $table->string('OBSERVACION', 200)->nullable();
            $table->decimal('PORCENTSURCHARGE1', 5)->nullable();
            $table->decimal('PORCENTSURCHARGE2', 5)->nullable();
            $table->decimal('TOTSURCHARGEPEN', 11, 4)->nullable();
            $table->decimal('TOTSURCHARGEUSD', 11, 4)->nullable();
            $table->char('TIPO_RECARGO', 1)->nullable();
            $table->integer('TIPO_OPERACION')->nullable();
            $table->decimal('PORCENT_DETRACCION', 5)->nullable();
            $table->decimal('MONTO_DETRACCION', 11)->nullable();
            $table->string('NBRTICKET', 13)->nullable();
            $table->string('HASHCODE', 28)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_sales');
    }
};
