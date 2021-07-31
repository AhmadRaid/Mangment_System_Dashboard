<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Governorate;
use App\Models\Order;
use App\Models\Order_status;
use App\Models\Product;
use App\Models\Sales_sources;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function index()
    {
        try {

            $orders = Order::with('governorate', 'sale_source', 'status_order')->get();
            return view('order.index', compact('orders'));
        } catch
        (\Exception $ex) {

            return redirect()->route('order')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function create()
    {

        $governorate = Governorate::getcountry();
        $products = Product::getcountry();
        $sales_source = Sales_sources::all();
        $status = Order_status::all();
        $departments = Department::all();
        try {
            return view('order.create', compact(['governorate', 'products', 'sales_source',
                'status', 'departments']));
        } catch (\Exception $ex) {

            return redirect()->route('order')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function store(Request $request)
    {
        try {


            $order = Order::create([
                'user_id' => Auth::id(),
                'customer' => $request->customer_name,
                'governorate_id' => $request->governorate_id,
                'phone' => $request->phone,
                'address' => $request->address,
                'department_id' => $request->department_id,
                'product_id' => $request->product_id,
                'product_quantity' => $request->product_quantity,
                'sale_source_id' => $request->salesource_id,
                'status_id' => $request->order_status_id,
                'shipping_method' => $request->shipping_method,
                'edit_commission' => $request->edit_commission,
                'shipping_note' => $request->shipping_note,
                'internal_notes' => $request->internal_notes,
                'country_id' => Auth::user()->country_id,
                'price_discount' => $request->discount_value,
            ]);
            return redirect()->route('order')->with(['seccess' => 'تم تقديم الطلب بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('order')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {


        try {
            $governorate = Governorate::getcountry();
            $products = Product::getcountry();
            $sales_source = Sales_sources::all();
            $status = Order_status::all();
            $departments = Department::all();
            $order = order::find($id);

            return view('order.edit', compact(['order', 'governorate', 'products', 'sales_source',
                'status', 'departments']));
        } catch (\Exception $ex) {

            return redirect()->route('order')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function update($id, Request $request)
    {
        if ($request->shipping_method == "0") {
            $request->request->add(['edit_commission' => "0"]);
        }

        if ($request->delivery == 0) {
            $request->request->add(['discount_value' => "0"]);
        }

        try {

            $order = order::find($id);

            if (!$order)
                return redirect()->route('order')->with(['error' => 'هذا القسم غير موجود']);

            $order->update([
                'user_id' => Auth::id(),
                'customer' => $request->customer_name,
                'governorate_id' => $request->governorate_id,
                'phone' => $request->phone,
                'address' => $request->address,
                'department_id' => $request->department_id,
                'product_id' => $request->product_id,
                'product_quantity' => $request->product_quantity,
                'sale_source_id' => $request->salesource_id,
                'status_id' => $request->order_status_id,
                'shipping_method' => $request->shipping_method,
                'edit_commission' => $request->edit_commission,
                'shipping_note' => $request->shipping_note,
                'internal_notes' => $request->internal_notes,
                'country_id' => Auth::user()->country_id,
                'price_discount' => $request->discount_value,
            ]);

            return redirect()->route('order')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('order')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }

    public function show($id)
    {
        $order = Order::find($id);

        return $audits = $order->audits()->with(['user', 'governorate'])->get();

        return view('order.show', compact(['order', 'audits']));
    }

    public function destroy($id)
    {

        try {
            $order = order::find($id);

            if (!$order)
                return redirect()->route('order')->with(['error' => 'هذا القسم غير موجود ']);

            $order->delete();

            return redirect()->route('order')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('order')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function export()
    {
        return Excel::download(new OrderExport, 'orders.xlsx');
    }


    public function specify_department($department_id, Request $request)
    {
        return Product::where('department_id', $department_id)->get();
    }

    public function specify_product($product_id, Request $request)
    {
        return Product::where('id', $product_id)->get();

    }

    public function checkCustomer($phone)
    {
        //Cheack if cutomer exist previously or not
        return $customer = Order::where('phone', $phone)->get();

    }


}
