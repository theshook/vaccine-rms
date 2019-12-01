<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBabiesRequest extends FormRequest
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
            "dob" => 'required',
            "nhts" => 'required',
            "first_name" => 'required',
            "last_name" => 'required',
            "mother_first_name" => 'required',
            "mother_last_name" => 'required',
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
            'dob.required' => 'Date of Birth is requried.',
            'baby_family_serial_number.required' => 'Family number is required.',
            'baby_family_serial_number.unique' => 'Family number already exists.'
        ];
    }
}
