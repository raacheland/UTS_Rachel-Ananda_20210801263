<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    // Nama tabel jika tidak sesuai konvensi plural 'supirs'
    // protected $table = 'supirs';

    // Kolom yang boleh diisi secara massal (mass assignment)
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'alamat',
        'email',
        'nomor_sim',
    ];

    // Contoh relasi (jika ada), misal supir punya banyak perjalanan
    public function perjalanans()
    {
        return $this->hasMany(Perjalanan::class, 'supir_id');
    }
}
