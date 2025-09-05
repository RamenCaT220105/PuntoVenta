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
        Schema::create('dcinvendorinvt74', function (Blueprint $table) {
            $table->char('VENDIDSS', 20)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->string('SITEID', 5)->nullable();
            $table->string('BUYCOD', 20)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->decimal('STDCOST', 8, 4)->nullable();
            $table->string('CURYID', 3)->nullable();
            $table->timestamp('BUYDATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcinvendorinvt74');
    }
};
