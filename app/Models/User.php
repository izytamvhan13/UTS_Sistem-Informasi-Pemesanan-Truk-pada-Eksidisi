<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Kolom-kolom yang dapat diisi
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Jika Anda menggunakan fitur timestamps
    public $timestamps = true;

    // Tambahkan properti atau metode lain sesuai kebutuhan
}
