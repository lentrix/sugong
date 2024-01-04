@extends('page')

@section('content')

    <div class="bg-yellow-300 min-w-[300px] p-8 rounded-lg shadow-lg">
        <h1 class="text-xl font-bold">User Login</h1>
        <div class="bg-green-200 p-3 rounded text-sm w-full my-3">
            This login page is exclusive for committee members only.
        </div>
        @include('flash')
        <form action="{{url('/login')}}" method="post">
            @csrf

            <div class="my-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="block p-2 rounded w-full">
            </div>

            <div class="my-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="block p-2 rounded w-full">
            </div>

            <button type="submit" class="px-8 py-2 bg-red-300 rounded-lg shadow hover:bg-red-400 duration-300">Login</button>
        </form>
    </div>

@endsection
