@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <div class="w-8/12 bg-white p-6 rounded-lg">
    <p class="text-center font-medium">
      @auth()
       Hello, <b class="text-blue-500">{{ auth()->user()->name }}</b> you are welcome to the home page.</p>
      
      
      @endauth
      
      @guest()
      <div class="text-center ">
        Hello, please kindly <a href="{{ route('login') }}" class="font-bold text-gray-500">Login</a> or <a href="{{ route('register') }}" class="font-bold text-gray-500">Register</a> </br>to view our dashboard
      </div>
     
      @endguest
      
  </div>

</div>
  
@endsection
    
    
