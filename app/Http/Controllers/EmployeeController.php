<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $Employees = Employee::all();
        return view('employee.index', compact('Employees'));
    }

    public function create()
    {
        return view('users.addEmplyee');
    }


    public function store(Request $request)
    {


        DB::beginTransaction();
        $Employee = Employee::create([

            'name'=>$request->name

        ]);

        DB::commit();
        return redirect()->route('employee')->with(['success' => 'تم ألاضافة بنجاح']);



    }


    public function edit($id)
    {

        $Employee = Employee::find($id);

        if (!$Employee)
            return redirect()->route('employee')->with(['error' => 'هذا العنصر  غير موجود ']);

        return view('employee.edit', compact('Employee'));

    }


    public function update($id, Request $request)
    {
        try {
            //validation

            //update DB
            $Employee = Employee::find($id);

            if (!$Employee)
                return redirect()->route('employee')->with(['error' => 'هذا العنصر غير موجود']);


            DB::beginTransaction();

            $Employee->update([
                name => $request->name
            ]);

            DB::commit();
            return redirect()->route('employee')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('employee')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $Employee = Employee::find($id);

            if (!$Employee)
                return redirect()->route('employee')->with(['error' => 'هذا الماركة غير موجود ']);

            $Employee->delete();

            return redirect()->route('employee')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('employee')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function profile($id =''){
        return view('employee.profile');
    }

}

