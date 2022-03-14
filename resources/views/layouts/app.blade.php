<!doctype html>
<html lang="en">
  <head>
    <title>Register/Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-gray-200">
      <nav class="p-6 bg-white flex justify-between mb-5">
          <!--The Nav Link-->
          <ul class="flex items-cente">
              <li><a href="{{ route('home') }}" class="p-3  font-bold">Home</a></li>
              @auth()
              <li><a href="{{ route('dashboard') }}" class="p-3  font-bold">Dashboard</a></li>
              <li><a href="" class="p-3">Post</a></li>
              @endauth()
              
          </ul>

          <!--The Account Link -->
            <ul class="flex items-cente">
              @auth()
              <li><a href="" class="p-3 font-bold">{{ auth()->user()->name }}</a></li>
              <li><a href="{{ route('logout') }}" class="p-3 text-gray-500 font-bold">Logout</a></li>
              @endauth
              
              @guest()
              <li><a href="{{ route('register') }}" class="p-3 text-gray-500 font-bold">Register</a></li>
              <li><a href="{{ route('login') }}" class="p-3 text-gray-500 font-bold">Login</a></li>
              @endguest
                
            </ul>
  

      </nav>

    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>