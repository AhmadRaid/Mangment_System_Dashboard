<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $guarded = [];


    public function governorate()
    {
        return $this->hasMany(Governorate::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }


    public function user()
    {
        return $this->belongsToMany('App\User', 'country_user');
    }

    public function getbannerAttribute($value)
    {

        return ($value !== null) ? asset($value) : "";

    }
}
