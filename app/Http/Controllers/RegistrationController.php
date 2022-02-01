<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Registration;
use App\ModelBarangay;
use App\Services\Serv_GenerateSlug;
use App\Services\Registered;
// use App\Services\Locations;
use App\ModelCity;

use App\ModelRegistration;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function city($id) {

        // return $cities->getCity()->region_code();
        return json_encode(ModelCity::select()->where('province_code',$id)->get());

    }

    public function barangay($id) {

        return json_encode(ModelBarangay::select()->where('city_municipality_code',$id)->get());

    }
    

    public function create(Serv_GenerateSlug $sLug, Registration $request)
    {
       try {
            
            //avoid duplicate entry 
            $create = ModelRegistration::firstOrCreate([
                // 'slug_id' => $sLug->registrationSlug(),
                'firstname' => $request->pangalan,
                'lastname' => $request->apelyido,
                'middlename' => $request->gpangalan,
                'mobile_no' => $request->mobile_number,
                'household_no' => $request->household_no,
                'province' => $request->province,
                'city' => $request->city,
                'barangay' => $request->barangay,
              ]);

            $update = ModelRegistration::updateOrCreate(['reg_id' => $create->reg_id],['slug_id' => $sLug->registrationSlug(),]);

            if($update) {

                $message = 'Successfully submitted, Please keep you ID-No. to update your credentials.<br><h3>ID-No. '.$update->slug_id.'</h3>';
                return redirect()->back()->with('success',$message);
        
            } else {
        
                return redirect()->back()->with('errors','Please check reqired input.');
            }
            
        } catch(\Exception $e) {
        
            return redirect()->route('register')->with('errors', "SomeThing wrong with your process. please try again.");
        
        }
         
    }

    public function search(Request $request, Registered $data) {

        try {
            
                $input = $request->input('search');
                $id = $data->getRegisteredId($input);

                if($id) {
                
                    return view('register_search',compact('id'));
                
                } else {

                    return redirect()->route('welcome')->with('error', "ID-No. $input not found.");

                }
                

        } catch(\Exception $e) {

            return redirect()->route('register')->with('error', "SomeThing wrong with your process. please try again.");
        
        }

    }

    public function update(Registration $request) {

        try {
                
                $update = ModelRegistration::where(function ($query) use($request) {

                        $query->from('registration')->where('registration.slug_id',$request->idno)->update(
                        [
                            'firstname' => $request->pangalan,
                            'lastname' => $request->apelyido,
                            'middlename' => $request->gpangalan,
                            'mobile_no' => $request->mobile_number,
                            'household_no' => $request->household_no,
                            'province' => $request->province,
                            'city' => $request->city,
                            'barangay' => $request->barangay,
                        ]
                    );
                });

                if($update) {

                    return redirect()->back()->with('success',"Credentials successfully updated.");
                
                } else {

                    return redirect()->back()->with('errors', "SomeThing wrong with your process. please try again.");

                }
                

        } catch(\Exception $e) {
            
            return redirect()->route('post.register')->with('errors', "SomeThing wrong with your process. please try again.");
        
        }

    }
}
