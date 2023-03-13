<?php

namespace App\Models;

use App\Models\Facility;
use App\Models\RoomBooking;
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

    public function room_booking()
    {
        return $this->hasMany(RoomBooking::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function getDiscountedPriceAttribute()
    {
        return $this->cost_per_day - (($this->cost_per_day / 100) * $this->discount_percentage);
    }

    public function getFinalPriceAttribute()
    {
        $after_service_charge = $this->discountedPrice + (($this->discountedPrice / 100) * config('app.service_charge_percentage'));
        $after_vat = $after_service_charge + (($after_service_charge / 100) * config('app.vat_percentage'));
        return $after_vat;
    }
}
