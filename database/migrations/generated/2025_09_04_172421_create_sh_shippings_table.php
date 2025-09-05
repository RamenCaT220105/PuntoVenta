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
        Schema::create('sh_shippings', function (Blueprint $table) {
            $table->char('SITEID', 5)->nullable();
            $table->char('TABLEID', 3)->nullable();
            $table->dateTime('SHIPDATE');
            $table->dateTime('DATEPROCE');
            $table->string('USERID', 20)->nullable();
            $table->string('FILENAME', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sh_shippings');
    }
};
