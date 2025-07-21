<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Nama tabel (opsional karena sudah sesuai konvensi)
    protected $table = 'products';

    // Kolom yang boleh diisi
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];

    // Cast otomatis ke tipe data tertentu
    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',
    ];

    // Accessor untuk format harga
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
