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
        Schema::create('in_cluster', function (Blueprint $table) {
            $table->char('CLASSUBID', 5)->nullable();
            $table->char('CLASSID', 5)->nullable();
            $table->timestamp('INTRDATEPHISICAL')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_cluster');
    }
};
