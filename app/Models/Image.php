<?php

namespace App\Models;

use App\Model\RoomType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    protected $table = 'images';

    protected $guarded = ['id'];

    use HasFactory;

    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }
}
