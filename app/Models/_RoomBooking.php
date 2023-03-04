<?php

namespace App\Model;

use App\Model\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class RoomBooking extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'room_bookings';

    protected $fillable = ['arrival_date', 'departure_date', 'room_cost', 'status', 'payment', 'room_id', 'user_id'];

    /**
     * Get the gallery that owns the image.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
