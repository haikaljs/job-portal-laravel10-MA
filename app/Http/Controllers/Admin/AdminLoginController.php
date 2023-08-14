<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Admin;
use Hash;
use Auth;

class AdminLoginController extends Controller
{
    public function index(){
        // $pass = Hash::make('123');
        // dd($pass);
        return view('admin.login');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]); 

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin_home');
        }else{
            return redirect()->route('admin_login')->with('error', 'Information is incorrect!');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}
