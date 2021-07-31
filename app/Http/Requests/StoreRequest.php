<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|max:55',
            'governorate_id' => 'required|exists:governorates,id',
            'country_id' => 'required|exists:countries,id',
            'address' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ادخال الاسم مطلوب',
            'name.max' => 'يجب ان لا يكون الاسم اكبر من 55 حرف',
            'address.required' => 'ادخال العنوان مطلوب',
            'governorate_id.required' => 'ادخال المحافظة مطلوب',
            'country_id.required' => ' ادخال الدولة مطلوب',
            'governorate_id.exists' => 'يجب ان تكون المحافظة موجودة',
            'country_id.exists' => ' يجب ان تكون الدولة موجودة',
        ];
    }
}
