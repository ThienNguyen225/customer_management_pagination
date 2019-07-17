<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:255',
            'age' => 'required',
            'dob' => 'date|required',
            'phone' => 'required',
            'email' => 'required|email',
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Do not leave blank',
            'name.max:255' => 'Must not exceed 255 characters',
            'age.required' => 'Do not leave blank',
            'dob.date' => 'không đúng định dạng',
            'dob.required' => 'không được để trống',
            'phone.required' => 'Do not leave blank',
            'email.required' => 'Do not leave blank',
            'email.email' => 'Malformed',
            'image.required' => 'Do not leave blank'
        ];
    }
}
