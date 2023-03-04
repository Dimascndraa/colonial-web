<?php

namespace App\Models;

use App\Model\RoomType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facilities';

    protected $guarded = ['id'];

    use HasFactory;

    public function room_types()
    {
        return $this->belongsToMany(RoomType::class, 'facility_room_type')->withTimestamps();
    }
}
