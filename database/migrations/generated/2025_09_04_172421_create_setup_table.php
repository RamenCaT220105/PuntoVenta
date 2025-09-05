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
        Schema::create('setup', function (Blueprint $table) {
            $table->string('TYPEPRICEUPDATE', 5)->nullable();
            $table->string('CUSTID', 20)->nullable();
            $table->tinyInteger('QTYSALESPERSONTURN');
            $table->tinyInteger('SALESPERSONTURN');
            $table->tinyInteger('QTYSIDE');
            $table->string('SOURCESITE', 5)->nullable();
            $table->string('CURYORIG', 3)->nullable();
            $table->tinyInteger('FLOATPRICE');
            $table->tinyInteger('FLOATCOST');
            $table->tinyInteger('FLOATQTY');
            $table->tinyInteger('FLOATOUTPUT');
            $table->string('TAXVALUEIGV', 2)->nullable();
            $table->string('TAXID', 2)->nullable();
            $table->string('SOURCECURYTYPEID', 6)->nullable();
            $table->timestamp('DATEPROCE')->useCurrentOnUpdate()->useCurrent();
            $table->char('TYPECONTROLLERFUEL', 1)->nullable();
            $table->string('CURYTYPEIDSALES', 6)->nullable();
            $table->boolean('CENTRAL');
            $table->string('SENDPATH', 40)->nullable();
            $table->string('RECEPPATH', 40)->nullable();
            $table->float('MAXDIFDIARY');
            $table->boolean('OPTIONVISIBLE');
            $table->float('MAXDIFCTRLFUEL');
            $table->boolean('GENRESUPART');
            $table->integer('VERSIONACCESS');
            $table->string('PATHHISTORECEP', 100)->nullable();
            $table->smallInteger('CENTRALSTATION')->nullable();
            $table->char('NAMEZIP', 30)->nullable();
            $table->smallInteger('NAMEZIPACTIVE')->nullable();
            $table->string('PATHHISTOTRANS', 100)->nullable();
            $table->boolean('STKNEW');
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
            $table->binary('TSTAMP')->nullable();
            $table->tinyInteger('FLOATDESC')->nullable();
            $table->string('CTABANKPEN', 20)->nullable();
            $table->string('CTABANKUSD', 20)->nullable();
            $table->char('BANKIDPEN', 2)->nullable();
            $table->char('BANKIDUSD', 2)->nullable();
            $table->integer('VENCPASS')->nullable();
            $table->string('SKIN', 50)->nullable();
            $table->string('CLAVE', 50)->nullable();
            $table->string('MARKETING', 150)->nullable();
            $table->string('CODETAXI', 10)->nullable();
            $table->string('CLAVE2', 10)->nullable();
            $table->string('CLAVE3', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setup');
    }
};
