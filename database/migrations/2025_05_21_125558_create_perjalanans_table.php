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
        Schema::create('perjalanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supir_id');         // Foreign key ke tabel supirs
            $table->unsignedBigInteger('kendaraan_id');     // Foreign key ke tabel kendaraans
            $table->date('tanggal');                         // Tanggal perjalanan
            $table->string('tujuan');                        // Tujuan perjalanan
            $table->time('waktu_berangkat');                 // Waktu berangkat
            $table->time('waktu_tiba')->nullable();          // Waktu tiba, boleh kosong
            $table->text('keterangan')->nullable();          // Keterangan tambahan, opsional
            $table->timestamps();

            // Tambahkan foreign key constraint jika perlu
            $table->foreign('supir_id')->references('id')->on('supirs')->onDelete('cascade');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perjalanans');
    }
};
