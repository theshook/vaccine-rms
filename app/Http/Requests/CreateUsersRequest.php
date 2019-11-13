<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsersRequest extends FormRequest
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
            'email'                     => 'required|unique:users|max:100',
            'first_name'                => 'required|min:2',
            'last_name'                 => 'required|min:2',
            'password'                  => 'required|min:6|confirmed',
        ];
    }
}
