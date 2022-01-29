<?php

namespace App\Exports;
use App\ModelRegistration;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromCollection;

class RegisteredMember implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        return view('exports.registered_member', [
            'members' => $this->dataList()
        ]);
    }

     public function dataList()
        {
            //return ModelRegistration::all();

            return ModelRegistration::leftJoin('philippine_provinces','philippine_provinces.province_code','registration.province')
                    ->leftJoin('philippine_cities','philippine_cities.city_municipality_code','registration.city')
                    ->leftJoin('philippine_barangays','philippine_barangays.barangay_code','registration.barangay')
                    ->where(function ($query) {

                    $query->from('registration');
                
                })
                ->select(
                    'registration.slug_id as idno',
                    'registration.firstname',
                    'registration.lastname',
                    'registration.middlename',
                    'registration.household_no',
                    'registration.mobile_no',
                    'philippine_provinces.province_description',
                    'philippine_cities.city_municipality_description',
                    'philippine_barangays.barangay_description',
                )->get();
        }

    // public function collection()
    // {
    //     //return ModelRegistration::all();

    //     return ModelRegistration::leftJoin('philippine_provinces','philippine_provinces.province_code','registration.province')
    //             ->leftJoin('philippine_cities','philippine_cities.city_municipality_code','registration.city')
    //             ->leftJoin('philippine_barangays','philippine_barangays.barangay_code','registration.barangay')
    //             ->where(function ($query) {

    //             $query->from('registration');
            
    //         })
    //         ->select(
    //             'registration.slug_id as idno',
    //             'registration.firstname',
    //             'registration.lastname',
    //             'registration.middlename',
    //             'registration.household_no',
    //             'registration.mobile_no',
    //             'philippine_provinces.province_description',
    //             'philippine_cities.city_municipality_description',
    //             'philippine_barangays.barangay_description',
    //         )->get();
    // }
}
