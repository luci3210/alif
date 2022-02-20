<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelRegistration;
use App\Services\Registered;
use Carbon\Carbon;
// use App\Charts\AlifChart;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Registered $monitoring)
    {

        ##################################################
        ################ members #########################
        ##################################################
        
        $data = $monitoring->getNomberOfMemberAndTarget();
        
        // $data = ModelRegistration::select('reg_id','created_at')->get()->groupBy(function($data) {
        //     return Carbon::parse($data->created_at)->format('M');
        // });

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


        return view('home',compact('data','barangay','target_member','members','voter_barangay','voter'));
    }
}
