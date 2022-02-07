<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Leader extends FormRequest
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
            'name' => 'required','max:50',
            'mobile_number' => 'required','max:11',
            'province' => 'required','max:50',
            'city' => 'required','max:50',
            'barangay' => 'required','max:50',
            'tno' => 'required','max:6',

        ];
    }

    public function messages() {

        return [
            'name.required'=>'Leader name is required',
            'mobile_number.required'=>'Contact number is required',
            'province.required'=>'Province name is required',
            'city.required'=>'City name is required',
            'barangay.required'=>'Barangay name is required',
            'tno.required'=>'Target number is required',
        ];
    }

}
