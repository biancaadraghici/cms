<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersCreateRequest extends FormRequest
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
            'role_id'=>'required',
            'is_active'=>'required',
            'first_name' => 'required|string|min:3|max:100|regex:/^([^0-9]*)$/',
            'last_name' => 'required|string|min:3|max:100|regex:/^([^0-9]*)$/',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/',
        ];
    }
}
