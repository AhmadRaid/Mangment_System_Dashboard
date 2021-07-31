<?php

namespace App;

use App\Models\Country;
use App\Models\Department;
use App\Models\Governorate;
use App\Models\Product;
use App\Models\Sales_sources;
use Illuminate\Database\Eloquent\Model;

class audit extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

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
}
