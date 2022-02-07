<?php

namespace  App\Services;
use App\ModelRegistration;
use App\ModelLeader;
use App\ModelVoters;
use DB;
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

        return ModelRegistration::leftJoin('philippine_barangays','registration.barangay','philippine_barangays.barangay_code')->where(function ($query) {

                $query->from('registration');
            
            })
            ->select(
                'registration.slug_id as idno',
                'registration.firstname as name',
                'registration.mobile_no',
                'registration.household_no',
                'registration.address',
                'philippine_barangays.barangay_description',
            )->orderBy('reg_id', 'desc')->paginate(25);
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


    public function getNomberOfMemberAndTarget() {

        return ModelRegistration::leftJoin('philippine_barangays','registration.barangay','philippine_barangays.barangay_code')
                                ->leftJoin('leaders','registration.barangay','leaders.ldr_barangay')
                                ->where(function ($query) {

                $query->from('registration');
            
            })
            ->select('philippine_barangays.barangay_description as barangay_name', 
                      DB::raw('SUM(leaders.ldr_target_no) as target_member'),
                    DB::raw('COUNT(registration.reg_id) as members'))
            ->groupBy('registration.barangay')
            ->orderBy('philippine_barangays.barangay_description', 'asc')->get();
    }


    public function getNomberOfMemberOnDate() {

        return ModelRegistration::leftJoin('leaders','registration.barangay','leaders.ldr_barangay')
                    ->leftJoin('philippine_barangays','leaders.ldr_barangay','philippine_barangays.barangay_code')->where(function ($query) {

                $query->from('registration');
            
            })
            ->select(
                array(
                    'leaders.ldr_barangay as barangay id',
                    'philippine_barangays.barangay_description as barangay name', 
                        DB::raw('COUNT(registration.reg_id) as members'),
                        'leaders.ldr_target_no as target no.'))
            ->groupBy('registration.created_at')
            ->orderBy('philippine_barangays.barangay_description', 'asc')->get();
    }


    public function getLeaderList() {

        return ModelLeader::join('philippine_barangays','philippine_barangays.barangay_code','leaders.ldr_barangay')->where(function ($query) {

                $query->from('leaders');
            
            })
            ->select(
                'leaders.ldr_name',
                'leaders.ldr_contact',
                'leaders.ldr_target_no',
                'philippine_barangays.barangay_description',
            )->orderBy('leaders.ldr_name', 'desc')->paginate(15);
    }

    public function getVoters() {

     return ModelVoters::join('philippine_barangays','philippine_barangays.barangay_code','voters.vtr_barangay')->where(function ($query) {

                $query->from('voters');
            
            })
            ->select(
                'voters.vtr_province',
                'voters.vtr_city',
                'voters.vtr_barangay',
                'voters.vtr_numbers',
                'philippine_barangays.barangay_description',
            )->orderBy('voters.vtr_barangay', 'desc')->paginate(15);   
    }

}