<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
        'user_id', 'tour_id', 'route_id', 'restaurant_id', 'lodging_id', 'date',
    ];

    public function user(){

        return $this->belongTo('App\User');
    }

    public function tour(){

        return $this->belongTo('App\Tour');
    }

    public function route(){

        return $this->belongTo('App\Route');
    }

    public function restaurant(){

        return $this->belongTo('App\Restaurant');
    }

    public function lodging(){

        return $this->belongTo('App\Lodging');
    }
}
