<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttributeRequest;
use App\Models\Attribute;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::orderBy('id', 'DESC');
        return view('attributes.index', compact('attributes'));
    }

    public function create()
    {
        $department = Department::all();
        return view('attributes.create', compact('department'));
    }


    public function store(AttributeRequest $request)
    {
        try {
            DB::beginTransaction();
            $attribute = Attribute::create([

                'name' => $request->name,
                'department_id' => $request->department_id,

            ]);

            DB::commit();
            return redirect()->route('attribute')->with(['success' => 'تم ألاضافة بنجاح']);
        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('attribute')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function edit($id)
    {

        $attribute = Attribute::find($id);

        if (!$attribute)
            return redirect()->route('attributes')->with(['error' => 'هذا العنصر  غير موجود ']);

        return view('attributes.edit', compact('attribute'));

    }


    public function update($id, Request $request)
    {
        try {
            //validation

            //update DB
            $attribute = Attribute::find($id);

            if (!$attribute)
                return redirect()->route('attributes')->with(['error' => 'هذا العنصر غير موجود']);


            DB::beginTransaction();

            $attribute->update([
                name => $request->name
            ]);

            DB::commit();
            return redirect()->route('attributes')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('attributes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $Attribute = Attribute::find($id);

            if (!$Attribute)
                return redirect()->route('attributes')->with(['error' => 'هذا الماركة غير موجود ']);

            $Attribute->delete();

            return redirect()->route('attributes')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('attributes')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}
