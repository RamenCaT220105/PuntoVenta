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
        Schema::create('op_docanti', function (Blueprint $table) {
            $table->string('DOCTYPEID', 3)->nullable();
            $table->integer('NBRDOCUMENT');
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_docanti');
    }
};
