<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBabiesRequest extends FormRequest
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
            "familyNumber" => 'required|unique:babies',
            "dob" => 'required',
            "nhts" => 'required',
            "first_name" => 'required',
            "middle_name" => 'required',
            "last_name" => 'required',
            "name_ext" => 'required',
            "street" => 'required',
            "municipality" => "required",
            "barangay" => "required",
            "zipCode" => 'required',
            "dateScreening" => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dob.required' => 'Date of Birth is requried.'
        ];
    }
}
