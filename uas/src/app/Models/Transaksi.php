<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // Nama tabel (jika tidak sesuai konvensi)
    protected $table = 'transaksis';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'kode_transaksi',
        'tanggal',
        'total',
        'status',
    ];

    // Tipe data otomatis
    protected $casts = [
        'tanggal' => 'datetime',
        'total' => 'float',
    ];

    // Contoh accessor: format total transaksi
    public function getFormattedTotalAttribute()
    {
        return 'Rp ' . number_format($this->total, 0, ',', '.');
    }

    // Jika relasi ke detail transaksi (opsional)
    public function details()
    {
        return $this->hasMany(TransaksiDetail::class);
    }
}
