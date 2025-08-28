<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripPlace extends Model
{
    protected $fillable = ['road_trip_id', 'place_name', 'place_description'];

    public function roadTrip()
    {
        return $this->belongsTo(RoadTrip::class);
    }
}
