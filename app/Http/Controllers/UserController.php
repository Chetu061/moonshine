<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\State;

class UserController extends Controller
{
public function user()
{
    $city = City::get();
    $state = State::get();
    $country = Country::get();
    $company = Company::get();
    // dd($company);
    $user = User::with('country')->orderBy('createdAt', 'desc')->get();//desconding order
    // dd($data);
    
    return view('user',compact('city','state','country','company','user'));
}
public function store(Request $request)
{
  
    $request->validate(
      $rules=  ['companyId'=>'required',
        'firstName'=>'required',
        'lastName'=>'required',
        'userEmail'=>'required',
        'userPassword'=>'required',
        'status'=>'required',
        'otp'=>'required',
        'entryTime'=>'required',
        'payroll'=>'required',
        'city'=>'required',
        'state'=>'required',
        'country'=>'required',
        'pinCode'=>'required'
        
        ]);
        $messages = [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            // ...
        ];
        
        $validatedData = $request->validate($rules, $messages);
    // $data=User::all();
    // dd($data);
    $user=new  User();
    $user->companyId=$request->companyId;
    $user->firstName=$request->firstName;
    $user->lastName=$request->lastName;
    $user->userEmail=$request->userEmail;
    $user->userPassword=$request->userPassword;
    $user->status=$request->status;
    $user->otp=$request->otp;
    $user->entryTime=$request->entryTime;
    $user->payroll=$request->payroll;
    $user->city=$request->city;
    $user->state=$request->state;
    $user->country=$request->country;
    $user->pinCode=$request->pinCode;
    $user->save();
    $notification=array(
        'message'=>' Data successfully Stored',
        'alert-type'=>'success'
    );
  
    return redirect()->route('user')->with($notification);

}
public function index()
{  
    // $user=User::all();
    $company = Company::get();
    $user = User::with('country')->orderBy('createdAt', 'desc')->get();//for country relation[doubt]
   
    // dd($user);
    return view('user',compact('user','company'));
}
public function edit($userId)
{   
    $city = City::get();
    $state = State::get();
    $country = Country::get();
    $company = Company::get();
    // dd($userId);
    $user=User::where('userId',$userId)->first();//when column name different
    
    return view('user.edit',compact('user','city','state','country','company'));
}



public function update(Request $request,$userId)
{
    

    $request->validate(
        $rules=  ['companyId'=>'required',
          'firstName'=>'required',
          'lastName'=>'required',
          'userEmail'=>'required',
          'userPassword'=>'required',
          'status'=>'required',
          'otp'=>'required',
          'entryTime'=>'required',
          'payroll'=>'required',
          'city'=>'required',
          'state'=>'required',
          'country'=>'required',
          'pinCode'=>'required'
          
          ]);
          $messages = [
              'name.required' => 'The name field is required.',
              'email.required' => 'The email field is required.',
              // ...
          ];
          
          $validatedData = $request->validate($rules, $messages);
    //  dd($userId);
    $user=User::where('userId',$userId)->first();
    // dd($user);
    $user->companyId=$request->companyId;
    $user->firstName=$request->firstName;
    $user->lastName=$request->lastName;
    $user->userEmail=$request->userEmail;
    $user->userPassword=$request->userPassword;
    $user->status=$request->status;
    $user->otp=$request->otp;
    $user->entryTime=$request->entryTime;
    $user->payroll=$request->payroll;
    $user->city=$request->city;
    $user->state=$request->state;
    $user->country=$request->country;
    $user->pinCode=$request->pinCode;
    // dd($user);

    $user->save();
    $notification=array(
        'message'=>'Data Updated successfully ',
        'alert-type'=>'success'
    );
    return redirect()->route('user')->with($notification);
}

public function delete($userId)
{
    // dd($userId);
    $user=User::where('userId',$userId)->first();
    $user->delete();
    $notification=array(
        'message'=>'Data Deleted successfully ',
        'alert-type'=>'success'
    );
    return redirect()->route('user')->with($notification);
  
}
}
