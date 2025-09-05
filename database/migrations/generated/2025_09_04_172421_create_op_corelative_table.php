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
        Schema::create('op_corelative', function (Blueprint $table) {
            $table->char('TYPECORELATIVE', 20)->nullable();
            $table->decimal('NBRCORELATIVE', 10, 0)->nullable();
            $table->string('USERID', 20)->nullable();
            $table->string('USER01', 30)->nullable();
            $table->string('USER02', 30)->nullable();
            $table->bigInteger('USER03')->nullable();
            $table->bigInteger('USER04')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->boolean('STKNEW');
            $table->boolean('STKMODIFY');
            $table->boolean('STKDELETE');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_corelative');
    }
};
