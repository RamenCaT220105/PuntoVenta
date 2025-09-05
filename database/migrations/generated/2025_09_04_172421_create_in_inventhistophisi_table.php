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
        Schema::create('in_inventhistophisi', function (Blueprint $table) {
            $table->char('SITEID', 5)->nullable();
            $table->char('INVTIDSKU', 20)->nullable();
            $table->dateTime('INTRDATEPHISICAL');
            $table->char('CLASSID', 5)->nullable();
            $table->char('CLASSUBID', 5)->nullable();
            $table->decimal('STOCKPHISICAL', 10, 3)->nullable();
            $table->decimal('QTYAVAIL', 10, 3)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_inventhistophisi');
    }
};
