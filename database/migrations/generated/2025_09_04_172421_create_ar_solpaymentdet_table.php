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
        Schema::create('ar_solpaymentdet', function (Blueprint $table) {
            $table->char('NBRSOLREFER', 10)->nullable();
            $table->char('TYPE', 3)->nullable();
            $table->char('NBRDEPOSIT', 10)->nullable();
            $table->float('TOTALPAYMENTPEN');
            $table->float('TOTALPAYMENTUSD');
            $table->float('DOCBALPEN');
            $table->float('DOCBALUSD');
            $table->char('DOCSUMMARYTYPEID', 2)->nullable();
            $table->decimal('NBRDOCSUMMARY', 10, 0)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->boolean('PROCESS');
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
        Schema::dropIfExists('ar_solpaymentdet');
    }
};
