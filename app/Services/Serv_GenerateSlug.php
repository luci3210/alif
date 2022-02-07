<?php

namespace  App\Services;

use Illuminate\Support\Str;

Class Serv_GenerateSlug {


    public function registrationSlug() {

        return Str::random(2).'.'.date('YmdHis').Str::random(2);
    }

    public function randomInt() {

        return date('YmdHis').Str::random(3);
    }

}