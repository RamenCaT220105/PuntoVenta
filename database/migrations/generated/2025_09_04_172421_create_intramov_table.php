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
        Schema::create('intramov', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->string('INVTIDSKU', 20)->nullable();
            $table->char('BATNBR', 10)->nullable();
            $table->dateTime('INTRDATE');
            $table->dateTime('INTRDATEPROCE');
            $table->string('TYPEDOCID', 5)->nullable();
            $table->float('CURYRATE');
            $table->timestamp('CURYDATE')->useCurrentOnUpdate()->useCurrent();
            $table->string('PERPOST', 6)->nullable();
            $table->boolean('SWTINOUT');
            $table->decimal('QTY', 20, 6)->nullable();
            $table->decimal('STDCOSTUSD', 8, 4)->nullable();
            $table->decimal('STDCOSTPEN', 8, 4)->nullable();
            $table->boolean('COMPONENT');
            $table->decimal('SLSPRICE', 8, 4)->nullable();
            $table->char('REFNBR', 15)->nullable();
            $table->string('DOCTYPEID', 3)->nullable();
            $table->boolean('STKFISI');
            $table->boolean('STKSEND');
            $table->boolean('STKRECEIVE');
            $table->string('USER1', 30)->nullable();
            $table->string('USER2', 30)->nullable();
            $table->string('USER3', 30)->nullable();
            $table->timestamp('USER4')->nullable();
            $table->timestamp('USER5')->nullable();
            $table->bigInteger('USER6')->nullable();
            $table->bigInteger('USER7')->nullable();
            $table->smallInteger('USER8')->nullable();
            $table->smallInteger('USER9')->nullable();
            $table->binary('TSTAMP')->nullable();
            $table->decimal('IDE', 18, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intramov');
    }
};
