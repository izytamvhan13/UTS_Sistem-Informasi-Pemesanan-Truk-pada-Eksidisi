<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Atribut yang dapat diisi melalui mass assignment
    protected $fillable = [
        'name',
        'address',
        'contact_number',
        'email',
        'website',
    ];

    // Jika Anda ingin menambahkan relasi, bisa diletakkan di sini
    // Misalnya, jika company memiliki banyak truck:
    // public function trucks()
    // {
    //     return $this->hasMany(Truck::class);
    // }
}
