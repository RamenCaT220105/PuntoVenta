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
        Schema::create('se_userpass', function (Blueprint $table) {
            $table->string('USERID', 20)->nullable();
            $table->char('PASSWORD', 12)->nullable();
            $table->dateTime('DATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('se_userpass');
    }
};
