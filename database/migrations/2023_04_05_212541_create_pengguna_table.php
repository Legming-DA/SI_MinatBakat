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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna');
            // $table->string('nama');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('kd_peran');
            $table->foreign('kd_peran')->references('kd_peran')->on('peran');
            // $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
