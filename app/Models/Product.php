<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    protected $guarded = [];


    public function scopeGetCountry($query)
    {
        return $query->where('country_id', Auth::user()->country_id)->get();
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function getphotoAttribute($value)
    {
        return ($value !== null) ? asset($value) : "";
    }

    public function getactiveAttribute($value)
    {
        return ($value == 0) ? 'غير مفعل' : 'مفعل';
    }

}
