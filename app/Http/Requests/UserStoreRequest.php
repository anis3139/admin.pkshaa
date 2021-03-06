<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required|min:3',
            'phone' => 'required|max:15|min:10|unique:users,phone,'.$this->id.',id',
            'username' => 'required|alpha_dash|max:50|min:4|unique:users,username,'.$this->id.',id',
            'email' => 'required|max:50|min:4|email|unique:users,email,'.$this->id.',id',
        ];
    }
}
