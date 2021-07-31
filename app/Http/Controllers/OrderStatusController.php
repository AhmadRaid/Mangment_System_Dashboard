<?php

namespace App\Http\Controllers;

use App\Models\Order_status;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function index()
    {
        try {

            $Order_status = Order_status::all();
            return view('status_order.index', compact('Order_status'));
        } catch
        (Exception $ex) {

            return redirect()->route('orderStatus')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function create()
    {
        try {
            return view('status_order.create');
        } catch (\Exception $ex) {

            return redirect()->route('orderStatus')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function store(Request $request)
    {
        try {
            $status = Order_status::create([
                'name' => $request->name
            ]);
            return redirect()->route('orderStatus')->with(['success' => 'تم ادخال الحالة بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('orderStatus')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {
        try {
            $status = Order_status::find($id);

            return view('status_order.edit', compact('status'));
        } catch (\Exception $ex) {

            return redirect()->route('orderStatus')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function update($id, Request $request)
    {
        try {

            $status = Order_status::find($id);

            if (!$status)
                return redirect()->route('orderStatus')->with(['error' => 'هذا القسم غير موجود']);

            $status->update($request->all());

            return redirect()->route('orderStatus')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('orderStatus')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $Department = Order_status::find($id);

            if (!$Department)
                return redirect()->route('orderStatus')->with(['error' => 'هذا القسم غير موجود ']);

            $Department->delete();

            return redirect()->route('orderStatus')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('orderStatus')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}

