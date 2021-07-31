<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Store extends Model
{

    protected $guarded = [''];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }

    public function scopeGetcountry($query)
    {
        return $query->where('country_id', Auth::user()->country_id)->get();
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
