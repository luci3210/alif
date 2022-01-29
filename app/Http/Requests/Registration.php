<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Registration extends FormRequest
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
            'pangalan'=>'required|max:40',
            'apelyido'=>'required|max:30',
            'gpangalan'=>'required|max:30',
            'mobile_number'=>'required|numeric',
            'household_no'=>'required|numeric',
            'province'=>'required',
            'city'=>'required',
            'barangay'=>'required'
            ];
    }

    public function messages() {

        return [
            'pangalan.required'=>' Punan ang pangalan',
            'apelyido.required'=>' Punan ang apelyido',
            'gpangalan.required'=>' Punan ang gitnang pangalan',
            'gpangalan.max'=>' Sumobra sa bilang ang inyong gitnang pangalan',
            'pangalan.max'=>' Sumobra sa bilang ang inyong pangalan',
            'apelyido.max'=>' Sumobra sa bilang ang inyong apelyido',

            'mobile_number.required'=>' Punan ang cellphone number',
            'mobile_number.numeric'=>' Punan ng tamang numero ang cellphone number',
            'household_no.required'=>' Punan ang bilang ng kasama sa bahay',
            'household_no.numeric'=>' Punan ng tamang numero ang bilang ng kasama sa bahay',
            'province.required'=>' Punan ang probinsya',
            'city.required'=>' Punan ang city/munisipalidad',
            'barangay.required'=>' Punan ang barangay',
        ];
    }

}
