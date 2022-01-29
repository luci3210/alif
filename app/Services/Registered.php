<?php

namespace  App\Services;
use App\ModelRegistration;

use Illuminate\Support\Str;
// use Illuminate\Pagination\CursorPaginator;

Class Registered {

    public function getAllRegistered() {

        return ModelRegistration::where(function ($query) {

                $query->from('registration');
            
            })
            ->select(
                'registration.slug_id as idno',
                'registration.firstname as name',
                'registration.mobile_no',
                'registration.household_no',
                'registration.address'
            )->get();
    }

    public function getRegisteredList() {

        return ModelRegistration::where(function ($query) {

                $query->from('registration');
            
            })
            ->select(
                'registration.slug_id as idno',
                'registration.firstname as name',
                'registration.mobile_no',
                'registration.household_no',
                'registration.address'
            )->orderBy('reg_id', 'desc')->paginate(15);
    }

    public function getRegisteredId($input) {

        return ModelRegistration::where(function ($query) use($input) {

                $query->from('registration')->where('registration.slug_id',$input);
            
            })
            ->select(
                'registration.slug_id as idno',
                'registration.firstname as pangalan',
                'registration.lastname as apelyido',
                'registration.middlename as gpangalan',
                'registration.mobile_no',
                'registration.household_no',
                'registration.province',
                'registration.city',
                'registration.barangay'
            )->first();
    }

}