<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    // Jika nama tabel tidak plural 'perjalanans', bisa ditentukan di sini
    // protected $table = 'perjalanans';

    // Kolom yang dapat diisi secara massal (mass assignment)
    protected $fillable = [
        'supir_id',
        'kendaraan_id',
        'tanggal',
        'tujuan',
        'waktu_berangkat',
        'waktu_tiba',
        'keterangan',
    ];

    // Relasi ke Supir (Many to One)
    public function supir()
    {
        return $this->belongsTo(Supir::class, 'supir_id');
    }

    // Relasi ke Kendaraan (Many to One)
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }
}
