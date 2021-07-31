<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Models\Attribute;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Http\Request;

class OptionController extends Controller
{

    public function index()
    {
        $options = Option::with(['product' => function ($prod) {
            $prod->select('id');
        }, 'attribute' => function ($attr) {
            $attr->select('id');
        }])->select('id', 'product_id', 'attribute_id', 'price');

        return view('options.index', compact('options'));
    }

    public function create()
    {
        $data = [];
        $data['products'] = Product::select('id')->get();
        $data['attributes'] = Attribute::select('id')->get();

        return view('options.create', $data);
    }

    public function store(OptionRequest $request)
    {


        DB::beginTransaction();

        //validation
        $option = Option::create([
            'attribute_id' => $request->attribute_id,
            'product_id' => $request->product_id,
            'price' => $request->price,
        ]);
        //save translations
        $option->name = $request->name;
        $option->save();
        DB::commit();

        return redirect()->route('option')->with(['success' => 'تم ألاضافة بنجاح']);
    }

    public function edit($optionId)
    {

        $data = [];
        $data['option'] = Option::find($optionId);

        if (!$data['option'])
            return redirect()->route('option')->with(['error' => 'هذه القيمة غير موجود ']);

        $data['products'] = Product::select('id')->get();
        $data['attributes'] = Attribute::select('id')->get();

        return view('option', $data);

    }

    public function update($id, OptionRequest $request)
    {
        try {

            $option = Option::find($id);

            if (!$option)
                return redirect()->route('option')->with(['error' => 'هذا ألعنصر غير موجود']);

            $option->update($request->only(['name', 'price', 'product_id', 'attribute_id']));

            return redirect()->route('option')->with(['success' => 'تم ألتحديث بنجاح']);
        } catch (\Exception $ex) {

            return redirect()->route('option')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            //get specific categories and its translations
            $option = Option::orderBy('id', 'DESC')->find($id);

            if (!$option)
                return redirect()->route('option')->with(['error' => 'هذا القسم غير موجود ']);

            $option->delete();

            return redirect()->route('option')->with(['success' => 'تم  الحذف بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('option')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}
