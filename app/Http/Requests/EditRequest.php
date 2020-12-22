<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'manager' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Cấm để trống',
            'phone.required' => 'Cấm để trống',
            'phone.numeric' => 'Sai định dạng',
            'email.required' => 'Cấm để trống',
            'email.email' => 'Sai định dạng email',
            'address.required' => 'Cấm để trống',
            'manager.required' => 'Cấm để trống',
        ];
        return $messages;
    }
}
