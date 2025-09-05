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
        Schema::create('sh_shippingtables', function (Blueprint $table) {
            $table->string('TABLEID', 3)->nullable();
            $table->string('TABLENAME', 40)->nullable();
            $table->smallInteger('SEQUENCE');
            $table->char('TYPE', 1)->nullable();
            $table->char('MODULEID', 2)->nullable();
            $table->string('DATEFIELD', 40)->nullable();
            $table->boolean('CENTRAL_TO_STATION');
            $table->boolean('STATION_TO_CENTRAL');
            $table->boolean('PERSITE');
            $table->boolean('RLSED');
            $table->string('COMMENTS', 40)->nullable();
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
        Schema::dropIfExists('sh_shippingtables');
    }
};
