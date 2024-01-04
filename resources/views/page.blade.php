<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sugong Festival - Logo Making Contest</title>
    @vite('resources/css/app.css')
</head>
<body>

<main>
    <a href="{{url('/')}}">
        <div class="sidebar">
            <h1 class="title text-red-300">Sugong</h1>
            <h1 class="title text-yellow-400">Festival</h1>
            <h2 class="text-xl text-white subtitle mt-3">Logo Making Contest</h2>

            <a href="{{url('/submit')}}" class="main-button">Submit Your Entry</a>
        </div></a>
    <div class="content">
        @if(auth()->guest())
            <a href="{{url('/login')}}" class="login-link">
                <img src="{{asset('img/user_icon.png')}}" alt="Login Link" title="Committee Login Page">
            </a>
        @else
            <div class="login-link bg-yellow-200 p-2 rounded-full">
                <img src="{{asset('img/user_icon.png')}}" alt="Logout Link" title="Logout"> {{auth()->user()->name}}
                <a href="{{url('/gallery')}}" class="ms-2">Gallery</a> <a href="{{url('/logout')}}" class="ms-2">Logout</a>
            </div>
        @endif

        @yield('content')
    </div>
</main>

</body>
</html>
