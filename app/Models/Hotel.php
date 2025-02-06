<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(HotelImage::class);
    }
}
