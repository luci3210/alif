<?php

namespace App\Imports;

use App\ModelRegistration;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Services\Serv_GenerateSlug;

class MembersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) 
        {

            ModelRegistration::create([

                'slug_id' => $collection[0],
                'firstname' => $collection[1],
                'middlename' => $collection[2],
                'lastname' => $collection[3],
                'mobile_no' => $collection[4],
                'household_no' => $collection[5],
                'province' => $collection[6],
                'city' => $collection[7],
                'barangay' => $collection[8]

            ]);
            
        }
    }
}
