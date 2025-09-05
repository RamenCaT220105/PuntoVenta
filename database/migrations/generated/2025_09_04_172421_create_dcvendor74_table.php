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
        Schema::create('dcvendor74', function (Blueprint $table) {
            $table->string('VENDIDSS', 20)->nullable();
            $table->char('CITYID', 3)->nullable();
            $table->char('COUNTRYID', 3)->nullable();
            $table->char('CLASSVENDORID', 2)->nullable();
            $table->char('TERMID', 2)->nullable();
            $table->string('VENDORID', 20)->nullable();
            $table->string('DESCR', 40)->nullable();
            $table->string('CONTACT', 40)->nullable();
            $table->string('TAXREGNBR', 20)->nullable();
            $table->string('ADDRES', 40)->nullable();
            $table->string('ADDRES2', 40)->nullable();
            $table->string('FONO1', 10)->nullable();
            $table->string('FONO2', 10)->nullable();
            $table->string('FAX', 10)->nullable();
            $table->string('MAIL', 40)->nullable();
            $table->char('STATUS', 1)->nullable();
            $table->decimal('CURRBAL', 9)->nullable();
            $table->char('CURYID', 3)->nullable();
            $table->char('CURYTYPEID', 6)->nullable();
            $table->char('TAXID', 2)->nullable();
            $table->string('USERID', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dcvendor74');
    }
};
