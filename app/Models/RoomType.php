<?php

namespace App\Models;

use App\Models\Facility;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'facility_room_type')->withTimestamps();
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
