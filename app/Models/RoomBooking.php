<?php

namespace App\Models;

use App\Models\Room;
use App\Models\RoomType;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomBooking extends Model
{
    protected $fillable = ['id'];

    use HasFactory;

    /**
     * Get the gallery that owns the image.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
