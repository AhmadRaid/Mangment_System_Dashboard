<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'user_id' => 'exists:users,id',
            'customer' => 'required|max:30',
            'governorate_id' => 'required|exists:governorate,id',
            'phone' => 'required|numeric',
            'address' => 'required',
            'department_id' => 'required|exists:departments,id',
            'product_id' => 'required|exists:products,id',
            'product_quantity' => 'required|numeric',
            'sale_source_id' => 'required|exists:sales_sources,id',
            'status_id' => 'required|exists:order_statuses,id',
            'shipping_method' => 'required',
            'shipping_note' => 'required|exists:users,id',
            'internal_notes' => 'required|exists:users,id',
            'country' => 'required|exists:users,id',
        ];
    }
}
