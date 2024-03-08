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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('idberita');
            $table->string('judul');
            $table->text('isi');
            $table->unsignedBigInteger('idkategori');
            $table->string('cover');
            $table->string('foto_tambahan');
            $table->timestamps();

            $table->foreign('idkategori')->references('idkategori')->on('kategori_beritas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
