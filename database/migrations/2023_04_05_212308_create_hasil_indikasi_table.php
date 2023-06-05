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
        Schema::create('hasil_indikasi', function (Blueprint $table) {
            $table->id('kd_hasil');
            $table->unsignedBigInteger('nisn');
            $table->foreign('nisn')->references('nisn')->on('siswa');
            $table->unsignedBigInteger('kd_aturan');
            $table->foreign('kd_aturan')->references('kd_aturan')->on('aturan');
            $table->unsignedBigInteger('kd_jurusan');
            $table->foreign('kd_jurusan')->references('kd_jurusan')->on('jurusan');
            $table->text('hasil_indikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_indikasi');
    }
};
