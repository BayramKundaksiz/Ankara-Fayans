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
        Schema::create('gelen_mesajs', function (Blueprint $table) {
            $table->id();
            $table->string('gonderici_adi');
            $table->string('gonderici_soyadi');
            $table->string('gonderici_email')->nullable();
            $table->string('gonderici_mesaji');
            $table->string('gonderici_gorseli')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gelen_mesajs');
    }
};
