<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    // Atribut yang dapat diisi melalui mass assignment
    protected $fillable = [
        'pemesanan_id',  // ID pemesanan terkait
        'amount',        // Jumlah pembayaran
        'payment_date',  // Tanggal pembayaran
        'payment_method', // Metode pembayaran (misalnya: transfer, tunai, dll.)
        'status',        // Status pembayaran (misalnya: berhasil, gagal, pending)
    ];

    // Jika Anda ingin menambahkan relasi, bisa diletakkan di sini
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}
