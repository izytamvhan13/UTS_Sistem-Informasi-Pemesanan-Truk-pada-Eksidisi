<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    // Atribut yang dapat diisi melalui mass assignment
    protected $fillable = [
        'pemesanan_id', // ID pemesanan terkait
        'truck_id',     // ID truk yang digunakan
        'origin',       // Lokasi asal
        'destination',  // Lokasi tujuan
        'load_weight',  // Berat muatan
        'notes',        // Catatan tambahan (opsional)
    ];

    // Jika Anda ingin menambahkan relasi, bisa diletakkan di sini
    // Misalnya, jika DetailPemesanan memiliki relasi dengan Pemesanan dan Truck:
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function truck()
    {
        return $this->belongsTo(Truk::class);
    }
}
