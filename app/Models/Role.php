<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];


    public function users()
    {
        return $this->hasMany(User::class);
    }


    public function getPermissionsAttribute($permission)
    {
        //عشان ادخل عل جاسون لازم اقله json_encode ولما بدي اجيبها لازم اقله decode بهذه الحالة
        // اي بيرمشن لحاله حيعملها ديكود بدل ما اضل انساها او اعيد الكود كل مرة من جديد

        return json_decode($permission, true);
    }
}
