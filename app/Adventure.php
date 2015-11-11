<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    protected $fillable = [
        'trail_name',
        'difficulty',
        'dog_friendly',
        'location',
        'rating',
        'directions',
        'description',
        'length',
        'is_loop',
        'hiked_on',
        'all_trails_url',
        'elevation_gain'
    ];

    protected $dates = ['hiked_on'];
}
