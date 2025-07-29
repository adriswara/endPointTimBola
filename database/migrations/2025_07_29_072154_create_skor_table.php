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
        Schema::create('skor', function (Blueprint $table) {
            $table->id()->primary();
            $table->integer("totalSkor");
            $table->string("pemainYangMencetakGol");
            $table->time("waktuTerjadinyaGol");
            $table->integer("idJadwal");
            $table->integer("idTim");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skor');
    }
};
