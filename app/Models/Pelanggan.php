<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    // Atribut yang dapat diisi melalui mass assignment
    protected $fillable = [
        'name',           // Nama pelanggan
        'email',          // Alamat email pelanggan
        'phone_number',   // Nomor telepon pelanggan
        'address',        // Alamat pelanggan
        'company_name',   // Nama perusahaan (jika ada)
    ];

    // Jika Anda ingin menambahkan relasi, bisa diletakkan di sini
    // Misalnya, jika Pelanggan memiliki banyak pemesanan:
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
