<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingDetail extends Model
{
    // Atribut yang dapat diisi melalui mass assignment
    protected $fillable = [
        'booking_id',
        'truck_id',
        'origin',
        'destination',
        'load_weight',
    ];

    // Relasi dengan model Booking
    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    // Relasi dengan model Truck
    public function truck(): BelongsTo
    {
        return $this->belongsTo(Truk::class);
    }
}
