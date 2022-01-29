<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\ModelProvince;

class LocationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('*', function ($view) {

            $view->with('provices', ModelProvince::where(function ($query) {

                $query->from('philippine_provinces');
            
            })
            ->select(
                'philippine_provinces.id',
                'philippine_provinces.psgc_code',
                'philippine_provinces.province_description',
                'philippine_provinces.region_code',
                'philippine_provinces.province_code'
            )->orderBy('province_description','asc')->get());

        });

    }
}
