<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'code' => 'required|unique:agencies',
            'name' => 'required|',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'manager' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'code.required' => 'Cấm để trống',
            'code.unique' => 'Trùng rồi',
            'name.required' => 'Cấm để trống',
            'phone.required' => 'Cấm để trống',
            'phone.numeric' => 'Sai kiểu dữ liệu',
            'email.required' => 'Cấm để trống',
            'email.email' => 'Sai định dạng email',
            'address.required' => 'Cấm để trống',
            'manager.required' => 'Cấm để trống',
        ];
        return $messages;
    }
}
