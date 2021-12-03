<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function bookable()
    {   // 不需要 use 是因為 Bookable 和 Booking 同一層
        return $this->belongsTo(Bookable::class);
    }
}
