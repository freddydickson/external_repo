@extends('layouts.app')

@section('content')

<div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="mb-4">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full rounded-lg p-3  @error('name') border-red-500 @enderror" value="{{ old('name') }}"  >

            @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="sr-only">Username</label>
            <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('username') border-red-500 @enderror" value="{{ old('username') }}" >

            @error('username')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}

            </div>
                
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="sr-only">Email</label>
            <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('email') border-red-500 @enderror" value="{{ old('email') }}" >
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
                
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="your password" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('password') border-red-500 @enderror" value="{{ old('password') }}" >
            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="sr-only">Password again</label>
            <input type="password" name="password_confirmation" id="password-confirmation" placeholder="Repeat password" class="bg-gray-100 border-2 w-full rounded-lg p-3 @error('password_confirmation') border-red-500 @enderror" value="" >
            @error('password_confirmation')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
                
            @enderror

        </div>

        <div class="">
            <button type="submit" class="bg-blue-700 w-full rounded-lg px-4 py-3 text-white font-medium">Register</button>
        </div>

    </form>

  </div>

</div>
  
@endsection
    
    
