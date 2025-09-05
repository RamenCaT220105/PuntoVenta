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
        Schema::create('in_datapdt', function (Blueprint $table) {
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('FILENAMEPDT', 800)->nullable();
            $table->float('CANTIDAD');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_datapdt');
    }
};
