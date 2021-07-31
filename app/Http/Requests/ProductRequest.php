<?php

namespace App\Http\Requests;

use App\Rules\ProductQty;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'description' => 'required|max:1000',
            'department_id' => 'required|exists:departments,id',
            'store_id' => 'required|exists:departments,id',
            'manage_stock' => 'required|in:0,1',
            'quantity_stock' => [new ProductQty($this->manage_stock)]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ادخال الاسم مطلوب',
            'name.max' => 'يجب ان لا يكون الاسم اكبر من 55 حرف',
            'price.required' => 'ادخال السعر مطلوب',
            'price.numeric' => 'يجب ادخال رقم وليس نص',
            'description.required' => 'ادخال الوصف مطلوب',
            'department_id.required' => 'ادخال القسم مطلوب',
            'department_id.exists' => 'يجب ان تكون القسم موجود',
            'store_id.required' => 'ادخال المخزن مطلوب',
            'store_id.exists' => 'يجب ان تكون المخزن موجود',
            'manage_stock.required' => 'يجب ان تحدد تتبع المخزن',
            'manage_stock.in' => 'يجب ان تدخل اختيار صحيح ',
        ];
    }
}
