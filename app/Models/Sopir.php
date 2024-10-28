<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    // Atribut yang dapat diisi melalui mass assignment
    protected $fillable = [
        'name',            // Nama sopir
        'email',           // Alamat email sopir
        'phone_number',    // Nomor telepon sopir
        'license_number',  // Nomor SIM sopir
        'address',         // Alamat sopir
        'vehicle_id',      // ID kendaraan (jika sopir terkait dengan kendaraan tertentu)
    ];

    // Jika Anda ingin menambahkan relasi, bisa diletakkan di sini
    public function vehicle()
    {
        return $this->belongsTo(Truk::class);
    }

    // Jika sopir memiliki banyak pemesanan, bisa ditambahkan seperti ini:
    // public function pemesanan()
    // {
    //     return $this->hasMany(Pemesanan::class);
    // }
}
