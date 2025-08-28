<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['road_trip_id', 'rating', 'comment'];

    public function roadTrip()
    {
        return $this->belongsTo(RoadTrip::class);
    }
}
