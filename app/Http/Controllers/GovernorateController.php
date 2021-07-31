<?php

namespace App\Http\Controllers;

use App\Models\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    public function index()
    {
        $Governorate = Governorate::all();
        return view('governorate.index', compact('Governorate'));
    }

    public function create()
    {
        return view('governorate.create');
    }


    public function store(Request $request)
    {
        DB::beginTransaction();
        $Governorate = Governorate::create([

            'name'=>$request->name,
            'commission' => $request->commission,
        ]);

        DB::commit();
        return redirect()->route('governorate')->with(['success' => 'تم ألاضافة بنجاح']);
    }


    public function edit($id)
    {

        $country = Country::find($id);

        if (!$country)
            return redirect()->route('country')->with(['error' => 'هذا العنصر  غير موجود ']);

        return view('governorate.edit', compact('$country'));

    }


    public function update($id, Request $request)
    {
        try {
            //validation

            //update DB
            $Governorate = Governorate::find($id);

            if (!$Governorate)
                return redirect()->route('governorate')->with(['error' => 'هذا العنصر غير موجود']);


            DB::beginTransaction();

            $Governorate->update([
                'name'=>$request->name,
                'commission' => $request->commission,
                ]);

            DB::commit();
            return redirect()->route('governorate')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('governorate')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {
        try {
            $Governorate = Governorate::find($id);

            if (!$Governorate)
                return redirect()->route('governorate')->with(['error' => 'هذا الماركة غير موجود ']);

            $Governorate->delete();

            return redirect()->route('governorate')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('governorate')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}

