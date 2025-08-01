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
        Schema::create('pemain', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('namaPemain');
            $table->integer('tinggiBadan');
            $table->integer('beratBadan');
            $table->string('posisiPemain');
            $table->string('nomorPunggung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemain');
    }
};
