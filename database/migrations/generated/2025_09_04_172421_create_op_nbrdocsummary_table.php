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
        Schema::create('op_nbrdocsummary', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->integer('BATNBRDEPOSITSITE');
            $table->dateTime('DATEPROCE');
            $table->smallInteger('SEQUENCE');
            $table->char('DOCSUMMARYTYPEID', 2)->nullable();
            $table->char('NBRDOCSUMMARY', 10)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_nbrdocsummary');
    }
};
