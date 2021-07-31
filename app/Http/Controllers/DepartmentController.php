<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {

        try {

            $Departments = Department::all();

            return view('department.index', compact('Departments'));
        } catch
        (\Exception $ex) {

            return redirect()->route('department')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function create()
    {
        try {
            return view('department.create');
        } catch (\Exception $ex) {

            return redirect()->route('department')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'هذا الاسم مطلوب',
        ];
        $validated = $request->validate([
            'name' => 'required|max:25'
        ], $messages);


        try {
            $department = Department::create([
                'name' => $request->name
            ]);
            return redirect()->route('department')->with(['success' => 'تم الادخال بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('department')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {
        try {
            $Department = Department::find($id);

            return view('department.edit', compact('Department'));
        } catch (\Exception $ex) {

            return redirect()->route('department')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function update($id, Request $request)
    {
        try {

            $Department = Department::find($id);

            if (!$Department)
                return redirect()->route('department')->with(['error' => 'هذا القسم غير موجود']);

            $Department->update($request->all());

            return redirect()->route('department')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('department')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $Department = Department::find($id);

            if (!$Department)
                return redirect()->route('department')->with(['error' => 'هذا القسم غير موجود ']);

            $Department->delete();

            return redirect()->route('department')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('department')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}

