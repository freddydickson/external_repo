@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <div class="w-8/12 bg-white p-6 rounded-lg">

    <p class="text-center font-medium"> Hello, <b class="text-blue-500">{{ auth()->user()->name }}</b> this your dashboard page</p>

  </div>

</div>
  
@endsection
    
    
