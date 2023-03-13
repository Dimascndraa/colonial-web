<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityRoomType extends Model
{
    protected $table = 'facility_room_type';

    protected $fillable = ['facility_id', 'room_type_id'];

    use HasFactory;
}
