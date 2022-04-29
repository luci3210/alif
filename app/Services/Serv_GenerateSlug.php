<?php

namespace  App\Services;

use Illuminate\Support\Str;

Class Serv_GenerateSlug {


    public function registrationSlug() {

        return rand(0,9999999999);
    }

    public function randomInt() {

        return date('YmdHis').Str::random(3);
    }

}