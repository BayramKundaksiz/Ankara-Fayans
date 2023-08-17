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
        Schema::create('banyos', function (Blueprint $table) {
            $table->id();
            $table->string('banyo_baslik')->nullable();
            $table->string('banyo_aciklama')->nullable();
            $table->string('banyo_gorseli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banyos');
    }
};
