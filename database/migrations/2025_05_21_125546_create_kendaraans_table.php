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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('merk');               // Merk kendaraan
            $table->string('tipe');               // Tipe kendaraan
            $table->string('nomor_polisi')->unique();  // Nomor polisi kendaraan unik
            $table->string('warna')->nullable();        // Warna kendaraan, opsional
            $table->year('tahun');                // Tahun produksi kendaraan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
