<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'booking_date',
        'status',
    ];

    // Menggunakan Carbon untuk memformat tanggal booking
    protected $casts = [
        'booking_date' => 'datetime',
    ];

    // Metode untuk mendapatkan tanggal booking dalam format tertentu (opsional)
    public function getFormattedBookingDateAttribute()
    {
        return $this->booking_date->format('d-m-Y H:i:s');
    }

    // Relasi dengan model User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model BookingDetail
    public function bookingDetails(): HasMany
    {
        return $this->hasMany(BookingDetail::class);
    }
}
