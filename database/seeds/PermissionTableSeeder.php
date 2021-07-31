<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [

            'اضافة مستخدم',
            'تعديل مستخدم',
            'حذف مستخدم',

            'عرض صلاحية',
            'اضافة صلاحية',
            'تعديل صلاحية',
            'حذف صلاحية',

            'اضافة منتج',
            'تعديل منتج',
            'حذف منتج',

            'اضافة قسم',
            'تعديل قسم',
            'حذف قسم',
            'عرض فسم',

            'اضافة حالات',
            'تعديل حالات',
            'حذف حالات',
            'عرض حالات',

            'اضافة مخزن',
            'تعديل مخزن',
            'حذف مخزن',
            'عرض مخزن',


            'اضافة طلب',
            'تعديل طلب',
            'حذف طلب',
            'عرض طلب',

            'تغير كلمة المرور',


            'العراق',
            'الحجاز',
            'الاردن',

        ];


        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);
        }


    }
}
