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
        Schema::create('aturan', function (Blueprint $table) {
            $table->id('kd_aturan');
            $table->unsignedBigInteger('kd_indikator');
            $table->foreign('kd_indikator')->references('kd_indikator')->on('indikator_mb');
            $table->unsignedBigInteger('kd_minatbakat');
            $table->foreign('kd_minatbakat')->references('kd_minatbakat')->on('minat_bakat');
            $table->string('hasil_aturan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aturan');
    }
};
