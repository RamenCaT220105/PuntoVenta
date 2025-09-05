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
        Schema::create('op_setup', function (Blueprint $table) {
            $table->boolean('AUTOMATICSALES');
            $table->string('CATEGORYFUEL', 5)->nullable();
            $table->string('CATEGORYLUBES', 5)->nullable();
            $table->string('CATEGORYPROMOTIONS', 5)->nullable();
            $table->boolean('BADGE');
            $table->decimal('MTOMAXSALES', 11, 4)->nullable();
            $table->string('ACCOUNTCARD', 15)->nullable();
            $table->dateTime('DATEPROCESALES');
            $table->string('CCLASSIDCASH', 2)->nullable();
            $table->string('CCLASSIDANTICIPATE', 2)->nullable();
            $table->string('CCLASSIDCREDLOCAL', 2)->nullable();
            $table->string('CCLASSIDCREDCORPORATE', 2)->nullable();
            $table->string('CCLASSIDOTHER', 2)->nullable();
            $table->string('DOCTYPEIDTICKET', 3)->nullable();
            $table->string('DOCTYPEIDFAC', 3)->nullable();
            $table->string('DOCTYPEIDBOL', 3)->nullable();
            $table->string('DOCTYPEIDNC', 3)->nullable();
            $table->string('DOCTYPEIDND', 3)->nullable();
            $table->boolean('STKCORRELATIVE');
            $table->boolean('STKENDBYDAY');
            $table->boolean('ACCESSCLOSEDZ');
            $table->string('REPORTPATH', 100)->nullable();
            $table->string('TRANSACFUELPATH', 100)->nullable();
            $table->string('TABLESTRANSACFUEL', 100)->nullable();
            $table->integer('STKODBCSTRING');
            $table->string('STRINGCONECC', 400)->nullable();
            $table->string('UNITMEDFUEL', 5)->nullable();
            $table->string('OFICSALESPOINT', 10)->nullable();
            $table->string('SKUROUNDSALES', 20)->nullable();
            $table->char('DOCTYPEIDNCAJUSTE', 10)->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->integer('TYPECONTROLLER');
            $table->string('TRANSACFUELPATHERROR', 100)->nullable();
            $table->string('TRANSACFUELPATHJTRAN', 100)->nullable();
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->dateTime('USER4')->nullable();
            $table->dateTime('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->string('DOCTYPEIDVALE', 3)->nullable();
            $table->integer('nro_mesas')->nullable();
            $table->decimal('VALOR_SIN_ARROZ', 10)->nullable();
            $table->integer('MESAABAJO')->nullable();
            $table->integer('MESAARRIBA')->nullable();
            $table->string('vencimiento', 10)->nullable();
            $table->integer('MUESTRATICKET')->nullable();
            $table->string('DIRECTORIO', 50)->nullable();
            $table->string('RUTARECEP', 50)->nullable();
            $table->string('RUTAERROR', 50)->nullable();
            $table->integer('MESAINICIAL')->nullable();
            $table->integer('FAC_ELECT')->nullable();
            $table->integer('OPT_EFACT')->nullable();
            $table->integer('TD_DOCUMENTO')->nullable();
            $table->integer('OPT_SUNAT')->nullable();
            $table->string('RUTADATA', 200)->nullable();
            $table->integer('QR_HASH_EFACT')->nullable();
            $table->integer('ALTOLINEA')->nullable();
            $table->integer('ALTOLINEAQR')->nullable();
            $table->decimal('MONTO_BOLETA_DNI', 11, 4)->nullable();
            $table->integer('SNTCREDITOBOLETA')->nullable();
            $table->integer('SNTCREDITOFACTURA')->nullable();
            $table->string('RUTA_LOGO', 200)->nullable();
            $table->integer('LOGO_WIDTH')->nullable();
            $table->integer('LOGO_HEIGHT')->nullable();
            $table->string('TEXTO_HASHDEFECT_QR', 28)->nullable();
            $table->string('RUTAPDF', 200)->nullable();
            $table->integer('TOPMARGEN')->nullable();
            $table->integer('LEFTMARGEN')->nullable();
            $table->integer('SALTOPDF')->nullable();
            $table->integer('ANCHOCAJA')->nullable();
            $table->integer('QR_PDF_WIDTH')->nullable();
            $table->integer('QR_PDF_HEIGHT')->nullable();
            $table->integer('ESPACIOLADO_LOGO')->nullable();
            $table->integer('NMCOMERCIALPDF')->nullable();
            $table->integer('MAX_REGXDOC')->nullable();
            $table->string('CODEHABILITAR', 20)->nullable();
            $table->integer('OPTPROPINA')->nullable();
            $table->integer('CANT_IMP_CREDITO')->nullable();
            $table->integer('OPT_FACTURAONLINE')->nullable();
            $table->integer('QR_HASH_FACTURAONLINE')->nullable();
            $table->string('IpService', 100)->nullable();
            $table->string('RutaOut', 100)->nullable();
            $table->integer('modoprueba')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_setup');
    }
};
