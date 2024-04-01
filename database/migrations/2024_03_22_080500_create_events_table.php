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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('tgl_mulai')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('kota')->nullable();
            $table->string('addition')->nullable();
            $table->string('link')->nullable();
            $table->string('logo')->nullable();
            $table->string('eo')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
