<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adventure extends Model
{
    protected $fillable [
        'trail_name',
        'difficulty',
        'rating',
        'directions',
        'description',
        'length',
        'is_loop',
        'hiked_on'
    ];
}
