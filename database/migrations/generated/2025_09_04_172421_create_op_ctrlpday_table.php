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
        Schema::create('op_ctrlpday', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->dateTime('DATEPROCE');
            $table->boolean('BANKOK');
            $table->dateTime('DATEBANKOK')->nullable();
            $table->boolean('PHYSICALOK');
            $table->dateTime('DATEPHYSICALOK')->nullable();
            $table->mediumText('OBSERVATION')->nullable();
            $table->string('USERID', 20)->nullable();
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->dateTime('USER4')->nullable();
            $table->dateTime('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_ctrlpday');
    }
};
