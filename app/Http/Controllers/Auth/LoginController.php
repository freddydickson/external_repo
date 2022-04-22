<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
       $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
       ]);
       // to check if user logged in with valid login details
       if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
           return back()->with('status', 'Invalid login details');
       }
       //when registered redirect user to dashboard
       return redirect()->route('dashboard');
    }
}
