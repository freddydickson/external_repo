@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg ">
    <!-- to check invalid login details -->
    @if (session('status'))
    <div class="text-white p-3 text-bold text-center rounded mb-2 text-sm bg-red-500">
        {{ session('status') }}
    </div>     
    @endif
    <form action="{{ route('login') }}" method="post">
        @csrf
        

       

        <div class="mb-4">
            <label for="name" class="sr-only">Email</label>
            <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('email') border-red-500 @enderror" value="{{ old('email') }}" >
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
                
            @enderror
        </div>


        <div class="mb-3">
            <label for="name" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="your password" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('password') border-red-500 @enderror" value="{{ old('password') }}" >
            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                
            @enderror
        </div>

        <div class="mb4">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="pt-2">Remember me</label>

            </div>
        </div>

        

        <div class="">
            <button type="submit" class="bg-blue-700 w-full rounded-lg px-4 py-3 text-white font-medium">Login</button>
        </div>

    </form>

  </div>

</div>
  
@endsection
    
    
