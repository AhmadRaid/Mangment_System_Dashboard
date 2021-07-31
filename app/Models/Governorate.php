<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Governorate extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function scopeGetcountry($query)
    {
        return $query->where('country_id', Auth::user()->country_id)->get();
    }
}
