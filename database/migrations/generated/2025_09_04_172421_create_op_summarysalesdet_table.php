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
        Schema::create('op_summarysalesdet', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCE');
            $table->smallInteger('SEQUENCE');
            $table->char('DOCSUMMARYTYPEIDFAC', 2)->nullable();
            $table->integer('REFERENCEFAC')->nullable();
            $table->char('DOCSUMMARYTYPEIDNC', 2)->nullable();
            $table->integer('REFERENCENC')->nullable();
            $table->string('CLASSID', 5)->nullable();
            $table->char('CLASSUBID', 5)->nullable();
            $table->string('custidss', 20)->nullable();
            $table->string('CUSTCLASSID', 2)->nullable();
            $table->float('TOTALBONUS');
            $table->float('DIFFERENCE');
            $table->float('TOTALPENNC')->nullable();
            $table->float('TOTALPENFC')->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->boolean('STKGENERATEDNC');
            $table->boolean('STKGENERATEDFC');
            $table->integer('ADELANT')->nullable();
            $table->integer('CONSADELANT')->nullable();
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
        Schema::dropIfExists('op_summarysalesdet');
    }
};
