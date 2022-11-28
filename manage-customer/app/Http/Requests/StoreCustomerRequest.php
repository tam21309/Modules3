<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
                'name' => 'required|unique:customer|max:6',
                'email' => 'required',
                'dob' => 'required'
            ];
    }
    public function messages (){
        return  [
                    'name.required'=>'truong bat buoc',
                    'name.unique'=>'khong duong trung lap du lieu',
                    'name.max'=>'truong bat buoc be hon :max',
                    'email.required'=>'truong bat buoc',
                    'dob.required'=>'truong bat buoc'
        ];
    }
}
