<?php

namespace App\Http\Controllers;

use App\Models\Sales_sources;
use Illuminate\Http\Request;

class SalesSourcesController extends Controller
{
    public function index()
    {

        try {

            $Sales_Sources = Sales_sources::all();
            return view('SalesSources.index', compact('Sales_Sources'));
        } catch
        (Exception $ex) {

            return redirect()->route('SalesSources')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function create()
    {
        try {
            return view('SalesSources.create');
        } catch (\Exception $ex) {

            return redirect()->route('SalesSources')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'هذا الحقل مطلوب',
        ];
        $validated = $request->validate([
            'name' => 'required|max:25'
        ], $messages);
        try {

            $Sales_sources = Sales_sources::create([
                'name' => $request->name
            ]);
            return redirect()->route('SalesSources')->with(['success' => 'تمت الاضافة بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('SalesSources')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {
        try {
            $Sales_Sources = Sales_sources::find($id);

            return view('SalesSources.edit', compact('Sales_Sources'));
        } catch (\Exception $ex) {

            return redirect()->route('SalesSources')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function update($id, Request $request)
    {
        $messages = [
            'name.required' => 'هذا الحقل مطلوب',
        ];
        $validated = $request->validate([
            'name' => 'required|max:25'
        ], $messages);

        try {

            $Sales_Sources = Sales_sources::find($id);

            if (!$Sales_Sources)
                return redirect()->route('SalesSources')->with(['error' => 'هذا القسم غير موجود']);

            $Sales_Sources->update($request->all());

            return redirect()->route('SalesSources')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('SalesSources')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $SalesSources = Sales_sources::find($id);

            if (!$SalesSources)
                return redirect()->route('SalesSources')->with(['error' => 'هذا القسم غير موجود ']);

            $SalesSources->delete();

            return redirect()->route('SalesSources')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('SalesSources')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
