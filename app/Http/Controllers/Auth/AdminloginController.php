<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminloginController extends Controller
{
     //show admin login page
     public function showadminlogin(){
        return view('auth.admin-login');
    }

    //login into admin page 
    public function adminlogin(Request $request){
       $check = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
     
      if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
          return redirect()->intended(route('admin.dashboard'));
      }
      return redirect()->back()->withInput($request->only('username'))->with('error','invalid Username or Password');

    }
    public function adminlogout(){
        Auth::logout();
        session()->invalidate();
        return redirect()->route('login')->with('success','You have Logged Out Successfully');
    }
}
