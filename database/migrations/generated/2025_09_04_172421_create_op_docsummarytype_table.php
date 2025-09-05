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
        Schema::create('op_docsummarytype', function (Blueprint $table) {
            $table->char('DOCSUMMARYTYPEID', 2)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->string('DESCRDOCSUMMARYTYPE', 40)->nullable();
            $table->decimal('NBRDOCSUMMARY', 10, 0)->nullable();
            $table->string('USERID', 20)->nullable();
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
        Schema::dropIfExists('op_docsummarytype');
    }
};
