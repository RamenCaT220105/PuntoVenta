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
        Schema::create('op_ctrlfueldet', function (Blueprint $table) {
            $table->char('SITEID', 5)->nullable();
            $table->timestamp('DATEPROCE')->useCurrentOnUpdate()->useCurrent();
            $table->char('INVTIDSKU', 20)->nullable();
            $table->decimal('STOCKINITIAL', 10, 3)->nullable();
            $table->decimal('QTYIMPUT', 10, 3)->nullable();
            $table->decimal('QTYOUTPUT', 10, 3)->nullable();
            $table->decimal('QTYSALES', 10, 3)->nullable();
            $table->decimal('QTYAVAIL', 10, 3)->nullable();
            $table->char('STKUINITID', 5)->nullable();
            $table->decimal('VALUEUNIMED', 4, 0)->nullable();
            $table->decimal('QTYPHISICAL', 10, 3)->nullable();
            $table->decimal('QTYDIFFERENCE', 10, 3)->nullable();
            $table->decimal('PORCENTDIFERENCE', 5)->nullable();
            $table->string('REMARK', 40)->nullable();
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->binary('TSTAMP')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_ctrlfueldet');
    }
};
