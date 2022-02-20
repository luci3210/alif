<?php

namespace App\Imports;

use App\ModelRegistration;
use Maatwebsite\Excel\Concerns\ToModel;

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
            'slug_id' => $row[0],
            'firstname' => $row[1],
            'middlename' => $row[2],
            'lastname' => $row[3],
            'mobile_no' => $row[4],
            'household_no' => $row[5],
            'province' => $row[6],
            'city' => $row[7],
            'barangay' => $row[8]
        ]);
    }
}
