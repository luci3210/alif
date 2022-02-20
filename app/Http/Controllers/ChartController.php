<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Registered;
use Carbon\Carbon;
use App\ModelRegistration;


class ChartController extends Controller
{
    
    public function __construct()
    {

    }

    public function generate(Registered $monitoring) {


        $overAllNewmember = $monitoring->CountAllNewMember();
        $countdays = $monitoring->CountDays();
        $overAll = $monitoring->CountAllMember();
        $topProvinces = $monitoring->topProvinces();
        $topCityMunisipality = $monitoring->topCityMunisipality();
        $topBrgy = $monitoring->topBrgy();


        return view('admin.chart.index',compact('overAllNewmember','overAll','countdays','topBrgy','topCityMunisipality','topProvinces'));
        
    }

    public function graph(Registered $monitoring, Request $request) {

        $getProvince = $request->input('province');
        $getCity = $request->input('city');
        $data = $monitoring->BycityMemberAndTarget($getProvince, $getCity);

        $countAll = $monitoring->CountMember($getProvince, $getCity);
        $countNewmember = $monitoring->CountNewMember($getProvince, $getCity);
        
        $overAll = $monitoring->CountAllMember();
        $overAllNewmember = $monitoring->CountAllNewMember($getProvince, $getCity);
        
        $barangay = [];
        $target_member = [];
        $members = [];

        foreach($data as $values) {

            $barangay[] = $values->barangay_name;
            $target_member[] = $values->target_member;
            $members[] = $values->members;
        }
 return view('admin.chart',compact(
        'barangay','target_member','members',
            'data','countAll','overAll','overAllNewmember',
                'countNewmember'
        ));
        
    }

    public function index(Registered $monitoring)
    {

        ##################################################
        ################ members #########################
        ##################################################
        
        $data = $monitoring->getNomberOfMemberAndTarget();
        
        $barangay = [];
        $target_member = [];
        $members = [];

        foreach($data as $values) {

            $barangay[] = $values->barangay_name;
            $target_member[] = $values->target_member;
            $members[] = $values->members;
        }

        ##################################################
        ##################### voters #####################
        ##################################################

        $datavoters = $monitoring->getVotersMonitoring();

        $voter_barangay = [];
        $voter = [];

        foreach($datavoters as $values) {

            $voter_barangay[] = $values->barangay_description;
            $voter[] = $values->vtr_numbers;
        }

        ##################################################
        ##################### date member ################
        ##################################################
        
    //    $data_month = ModelVoters::join('philippine_barangays','philippine_barangays.barangay_code','voters.vtr_barangay')
    //             ->join('philippine_provinces','voters.vtr_province','philippine_provinces.province_code')
    //             ->join('philippine_cities','voters.vtr_city','philippine_cities.city_municipality_code')->where(function ($query) {

    //             $query->from('voters');
            
    //         })
    //         ->select(
    //             'voters.created_at  ',
    //             'voters.vtr_numbers',
    //             'philippine_barangays.barangay_description',
    //             'philippine_provinces.province_description',
    //             'philippine_cities.city_municipality_description',
    //         )->get();   
    // }

    //     $months = [];
    //     $count = [];

    //     foreach($data_month as $month => $values) {

    //         return $months[] = $month;
    //         $count[] = count($values);
    //     }

        return view('admin.chart',compact(
            'barangay','target_member','members',
                    'voter_barangay','voter'));
    }
}
