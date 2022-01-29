<?php

namespace  App\Services;
use App\ModelProvince;
use App\ModelCity;
use App\ModelBarangay;

use Illuminate\Support\Str;

Class Locations {

    public function getProvince() {

        return ModelProvince::where(function ($query) {

                $query->from('philippine_provinces');
            
            })
            ->select(
                'philippine_provinces.id',
                'philippine_provinces.psgc_code',
                'philippine_provinces.province_description',
                'philippine_provinces.region_code',
                'philippine_provinces.province_code'
            )->get();
    }

    public function getCity($id) {

        return ModelCity::where(function ($query) use($id) {

                $query->from('philippine_cities')->where('philippine_cities.province_code',$id);
            
            })->get();
    }

    public function getBarangay() {

        return ModelBarangay::where(function ($query) {

                $query->from('philippine_barangays');
            
            })->get();
    }

}
