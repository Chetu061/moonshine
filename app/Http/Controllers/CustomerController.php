<?php

namespace App\Http\Controllers;

use App\Models\Addresstype;
use App\Models\Bank;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\Customer;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerview()
    { $city = City::get();
        $state = State::get();
        $country = Country::get();
        $user = User::get();
        $company = Company::get();
        $bank=Bank::get();
        $address=Addresstype::get();
        // dd($user);
        return view('customerview',compact('city','state','country','user','company','bank','address'));
        
    }
    public function store(Request $request)
{
    // dd($request);
    // $data=User::all();
    // dd($data);
    $cust=new  Customer();
    // $cust->customer_id=$request->customer_id;
    // $cust->user_id=$request->user_id;
   
    // $cust->company_detail_id=$request->company_detail_id;
    $cust->bank_id=$request->bank_id;
    $cust->group_cos=$request->group_cos;
    $cust->address1=$request->address1;
    $cust->address2=$request->address2;
    $cust->area=$request->area;
    $cust->landmark=$request->landmark;
    $cust->country=$request->country;
    $cust->state=$request->state;
    $cust->city=$request->city;
   $cust->address_type=$request->address_type;
   $cust->phone_no=$request->phone_no;
   $cust->fax=$request->fax;
   $cust->location_email=$request->location_email;
   $cust->website=$request->website;
   $cust->ref_by=$request->ref_by;
   $cust->trade_activity=$request->trade_activity;
   $cust->status=$request->status;
   $cust->facility_location=$request->facility_location;
   $cust->customer_name=$request->customer_name;
   $cust->customer_email=$request->customer_email;
   $cust->postbox=$request->postbox;
    $cust->save();

    // dd($cust);
    // $notification=array(
    //     'message'=>' Data successfully Stored',
    //     'alert-type'=>'success'
    // );
  
    return redirect()->route('customer.index');
    // ->with($notification);

}
public function index()
{  
    $cust=Customer::all();
    // dd($cust);
    return view('customer.index',compact('cust'));
}
}
