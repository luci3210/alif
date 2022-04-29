<?php

namespace App\Imports;

use App\ModelRegistration;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;


class MembershipImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelRegistration([
            'slug_id' => Str::random(7),
            'firstname' => $row[0],
            'middlename' => $row[1],
            'lastname' => $row[2],
            'mobile_no' => $row[3],
            'household_no' => $row[4],
            'province' => $row[5],
            'city' => $row[6],
            'barangay' => $row[7],
            'manual' => 1
            // 'created_at' => '2022-02-24 21:39:36'
        ]);
    }
}
