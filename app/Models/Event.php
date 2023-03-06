<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['id'];

    use HasFactory;

    public function event_bookings()
    {
        return $this->hasMany(EventBooking::class);
    }
}
