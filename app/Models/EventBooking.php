<?php

namespace App\Models;

use App\Model\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventBooking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_bookings';

    protected $fillable = ['id'];

    use HasFactory;

    /**
     * Get the gallery that owns the image.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the gallery that owns the image.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
