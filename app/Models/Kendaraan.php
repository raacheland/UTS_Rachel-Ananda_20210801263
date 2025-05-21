<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    // Jika nama tabel berbeda dari 'kendaraans', bisa ditentukan di sini:
    // protected $table = 'kendaraans';

    // Kolom yang boleh diisi massal
    protected $fillable = [
        'merk',
        'tipe',
        'nomor_polisi',
        'warna',
        'tahun',
    ];

    // Contoh relasi: Kendaraan punya banyak perjalanan
    public function perjalanans()
    {
        return $this->hasMany(Perjalanan::class, 'kendaraan_id');
    }
}
