<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'phone'=>'required|exists:admins,phone',
           'password'=>'required|min:5|max:30'
        ],[
            'phone.exists'=>'This phone is not exists in admins table'
        ]);

        $creds = $request->only('phone','password');

        if( Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('dashboard.home');
        }else{
            return redirect()->route('dashboard.login')->with('fail','Incorrect credentials');
        }
    }
}
