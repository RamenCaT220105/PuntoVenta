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
        Schema::create('in_inventphisical', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->char('CLASSID', 5)->nullable();
            $table->char('CLASSUBID', 5)->nullable();
            $table->float('STOCKPHISICAL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_inventphisical');
    }
};
