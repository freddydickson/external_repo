<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index (){

        // DieDump to check if registered user is logged in
        //dd(auth()->user());

        return view('dashboard');
    }
}
