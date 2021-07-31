<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Department;
use App\Models\Governorate;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {

        try {
            $products = Product::with('store')->get();
            return view('products.index', compact('products'));
        } catch
        (\Exception $ex) {

            return redirect()->route('product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function create()
    {
        try {
            $governrate = Governorate::getcountry();
            $departments = Department::all();
            $stores = Store::getcountry();
            return view('products.create', compact(['governrate', 'departments', 'stores']));
        } catch (\Exception $ex) {

            return redirect()->route('product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function store(ProductRequest $request)
    {

        try {
            //save Product Image
            $file_extention = $request->photo->getClientOriginalExtension();
            $file_name = 'images/Product/' . time() . '.' . $file_extention;
            $path = 'images/Product';
            $request->photo->move($path, $file_name);

            $product = Product::create([
                'name' => Auth::id(),
                'photo' => $file_name,
                'description' => $request->description,
                'department_id' => $request->department_id,
                'country_id' => Auth::user()->country_id,
                'store_id' => $request->store_id,
                'price' => $request->price,
                'quantity_stock' => $request->quantity_stock,
            ]);
            return redirect()->route('product')->with(['success' => 'تم التسجيل بنجاح']);
        } catch (\Exception $ex) {

            return $ex;
            redirect()->route('product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {
        try {
            $governrate = Governorate::getcountry();
            $departments = Department::all();
            $stores = Store::getcountry();
            $product = Product::find($id);

            return view('products.edit',
                compact(['product', 'governrate', 'departments', 'stores']));
        } catch (\Exception $ex) {

            return redirect()->route('product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function update($id, Request $request)
    {
        try {

            $product = Product::find($id);

            if (!$product)
                return redirect()->route('product')->with(['error' => 'هذا المنتج غير موجود']);
            //save Product Image
            $file_extention = $request->photo->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extention;
            $path = 'images/Product';
            $request->photo->move($path, $file_name);

            $product->update([
                'name' => Auth::id(),
                'photo' => $file_name,
                'description' => $request->description,
                'department_id' => $request->department_id,
                'country_id' => Auth::user()->country_id,
                'price' => $request->price,
                'quantity_stock' => $request->quantity_stock,
            ]);

            return redirect()->route('product')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return $ex;
            redirect()->route('product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $product = Product::find($id);

            if (!$product)
                return redirect()->route('product')->with(['error' => 'هذا المنتج غير موجود ']);

            $product->delete();

            return redirect()->route('product')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('product')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
