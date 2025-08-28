<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoadTrip extends Model
{
    protected $fillable = ['title', 'description'];

    public function places()
    {
        return $this->hasMany(TripPlace::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
