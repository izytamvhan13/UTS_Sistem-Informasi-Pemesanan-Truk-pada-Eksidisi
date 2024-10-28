<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemesanan extends Model
{
    public function details(): HasMany
    {
        return $this->hasMany(BookingDetail::class);
    }
}

