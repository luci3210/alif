<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Voters extends FormRequest
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
            'province' => 'required','max:50',
            'city' => 'required','max:50',
            'barangay' => 'required','max:50',
            'vno' => 'required','max:6',

        ];
    }

    public function messages() {

        return [
            'province.required'=>'Province name is required',
            'city.required'=>'City name is required',
            'barangay.required'=>'Barangay name is required',
            'vno.required'=>'Number of Barangay voters is required',
        ];
    }

}
