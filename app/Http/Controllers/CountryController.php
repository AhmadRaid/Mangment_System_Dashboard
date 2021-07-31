<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Order;
use App\User;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{

    public function index()
    {
        $country = Country::all();
        return view('country.index', compact('country'));
    }

    public function create()
    {
        return view('country.create');
    }


    public function store(Request $request)
    {
        DB::beginTransaction();

        $file_extention = $request->banner->getClientOriginalExtension();
        $file_name = 'images/BannarCountry/' . time() . '.' . $file_extention;
        $path = 'images/BannarCountry';
        $request->banner->move($path, $file_name);


        $country = Country::create([

            'name' => $request->name,
            'banner' => $file_name,
            'currency' => $request->currency
        ]);

        DB::commit();
        return redirect()->route('country')->with(['success' => 'تم ألاضافة بنجاح']);
    }


    public function edit($id)
    {

        $country = Country::find($id);

        if (!$country)
            return redirect()->route('country')->with(['error' => 'هذا العنصر  غير موجود ']);

        return view('country.edit', compact('country'));

    }


    public function update($id, Request $request)
    {
        try {

            $country = Country::find($id);

            if (!$country)
                return redirect()->route('country')->with(['error' => 'هذا العنصر غير موجود']);


            DB::beginTransaction();

            $country->update([
                name => $request->name
            ]);

            DB::commit();
            return redirect()->route('country')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (Exception $ex) {

            DB::rollback();
            return redirect()->route('country')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {
        try {
            $country = Country::find($id);

            if (!$country)
                return redirect()->route('country')->with(['error' => 'هذا الماركة غير موجود ']);

            $country->delete();

            return redirect()->route('country')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (Exception $ex) {
            return redirect()->route('country')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function choosecountry()
    {
        $countries = Country::all();

        return view('country.ChooseCountry', compact('countries'));
    }


    public function sendCountry($id, Request $request)
    {
        $country = Order::all()->where('country_id', $id);

        User::where('id', Auth::id())->update(array('country_id' => $id));

        $request->session()->put('country', 'Enter');

        return redirect()->route('Main_Page');
    }

}

