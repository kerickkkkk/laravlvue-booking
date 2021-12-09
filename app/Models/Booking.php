<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'to'];
    
    public function bookable()
    {   // 不需要 use 是因為 Bookable 和 Booking 同一層
        return $this->belongsTo(Bookable::class);
    }
    
    public function review()
    {
        return $this->hasOne(Review::class);
    }

    // scope 可以不用血
    public function scopeBetweenDates(Builder $query, $from, $to)
    {   
        // 保證會在這個範圍內且不會 overlap
        return $query->where('to', '>=', $from)
            ->where('from', '<=', $to);
    }
}
