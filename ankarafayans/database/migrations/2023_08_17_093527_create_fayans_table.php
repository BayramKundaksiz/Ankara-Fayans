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
        Schema::create('fayans', function (Blueprint $table) {
            $table->id();
            $table->string('fayans_baslik')->nullable();
            $table->string('fayans_aciklama')->nullable();
            $table->string('fayans_gorseli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fayans');
    }
};
