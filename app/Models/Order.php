<?php

namespace App\Models;

use     Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use OwenIt\Auditing\Contracts\Auditable;

class Order extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $guarded = [];

    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function status_order()
    {
        return $this->belongsTo(Sales_sources::class, 'status_id');
    }

    public function sale_source()
    {
        return $this->belongsTo(Sales_sources::class, 'sale_source_id');
    }

    public function scopeGetCountry($query)
    {
        return $query->where('country_id', Auth::user()->country_id);
    }

    public function scopeGetinfouser($query)
    {
        return $query->where('user_id', Auth::id());
    }

}
