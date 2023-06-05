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
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id('kd_jurusan');
            // $table->unsignedBigInteger('kd_aturan');
            // $table->foreign('kd_aturan')->references('kd_aturan')->on('aturan');
            $table->string('bidang_jurusan');
            $table->text('deskripsi');
            $table->text('persyaratan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusan');
    }
};
