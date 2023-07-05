<?php

namespace App\Http\Controllers;

use App\Models\subscription_admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profile()
    {

        $id =Auth::user()->admin_id; //login person can access
        // dd($id);
        $profileData = subscription_admin::find($id); //get data from users table from id
    //    dd($profileData);
        return view('profile', compact('profileData'));
    }
    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->admin_id; //login person can access
        $data = subscription_admin::find($id); //get data from users table from id
        $data->company_name = $request->company_name;
        $data->admin_email = $request->admin_email;
        $data->save();
        $notification=array(
            'message'=>'Admin login Updated successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
        
    }
    public function AdminLogout(Request $request) //backend template logout button work
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification=array(
            'message'=>'Admin logout successfully',
            'alert-type'=>'success'
        );
      
        return redirect('login')->with($notification);
    } //end method
    public function AdminSetting()
    {
        return view('setting');
    }
}
