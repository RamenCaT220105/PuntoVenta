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
        Schema::create('op_documentfree_head', function (Blueprint $table) {
            $table->string('SITEID', 5)->nullable();
            $table->char('DOCUMENTFREEID', 10)->nullable();
            $table->string('CUSTIDSS', 20)->nullable();
            $table->dateTime('DATEPROCEINI');
            $table->dateTime('DATEPROCEFIN');
            $table->float('FREETOTAL');
            $table->boolean('STKDEL');
            $table->string('USERID', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_documentfree_head');
    }
};
