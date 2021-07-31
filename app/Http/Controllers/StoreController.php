<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Governorate;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        try {

            $stores = Store::with('country', 'governorate')->get();

            return view('store.index', compact('stores'));
        } catch
        (Exception $ex) {

            return redirect()->route('store')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function create()
    {

        try {
            $governrate = Governorate::getcountry();

            return view('store.create', compact('governrate'));

        } catch (Exception $ex) {

            return redirect()->route('store')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function store(StoreRequest $request)
    {
        try {
            $store = Store::create([
                'name' => $request->name,
                'address' => $request->address,
                'country_id' => $request->country_id,
                'governorate_id' => $request->governorate_id,

            ]);
            return redirect()->route('store')->with(['success' => 'تم الاضافة بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('store')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {
        try {
            $governrate = Governorate::getcountry();
            $stores = Store::find($id);

            return view('store.edit', compact(['stores', 'governrate']));

        } catch (\Exception $ex) {

            return redirect()->route('store')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function update($id, StoreRequest $request)
    {
        try {

            $store = Store::find($id);

            if (!$store)
                return redirect()->route('store')->with(['error' => 'هذا القسم غير موجود']);

            $store->update($request->all());

            return redirect()->route('store')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('store')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $store = Store::find($id);

            if (!$store)
                return redirect()->route('store')->with(['error' => 'هذا القسم غير موجود ']);

            $store->delete();

            return redirect()->route('store')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('store')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function record()
    {
        $x = Store::find(1);

        $audits = $x->audits()->with('user')->get();

        return view('store.record', compact('audits'));

    }
}

