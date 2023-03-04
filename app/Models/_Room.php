<?php

namespace App\Model;

use App\Model\RoomType;
use App\Model\RoomBooking;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rooms';

    protected $fillable = ['room_number', 'description', 'available', 'status', 'room_type_id'];


    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function room_bookings()
    {
        return $this->hasMany(RoomBooking::class);
    }
}
