<?php

namespace App\Models;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rooms';

    protected $guarded = ['id'];

    use HasFactory;

    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function room_bookings()
    {
        return $this->hasMany(RoomBooking::class);
    }
}
