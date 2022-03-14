<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class RegisterController extends Controller
{
    //
    public function index () {
        return view('auth.register');
    }

    // creating a store menthod
    public function store (Request $request){
        //this is where to validate registered user against sql injection
       $this->validate($request, [
        'name' => 'required|max:250',
        'username' => 'required|max:250',
        'email' => 'required|email|max:250',
        'password' => 'required|min:4|confirmed',
       ]);

       //this is where to create and store the registered user in the database
       User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
       ]);

       // Technically signed in a registered user..
       auth()->attempt($request->only('email', 'password'));

       //this is where to redirect logged in user to any page example Dashboard
       return redirect()->route('dashboard');
    }



}
