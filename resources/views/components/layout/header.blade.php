<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Components</title>
    <link rel="stylesheet" href="{{url('/css/app.css') }}">
    <link rel="stylesheet" href="{{url('/css/dracula.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{url('css/style.css') }}">
    <link 
        href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
        rel="stylesheet"  type='text/css'>
    @yield('styles')

</head>
<body>
    <header class="antialiased">
        <nav class="flex items-center justify-between flex-wrap bg-white p-6">
            
            <div class="block lg:hidden text-gray-600">
                <button class="flex items-center px-3 py-2">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>

            <div class="flex items-center flex-shrink-0 text-white mr-6 text-gray-900">
                <span class="logo font-semibold text-xl tracking-tight">ONLINE FLY</span>
            </div>
            
            <div class="w-full hidden block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow text-gray-600 text-lg font-semibold">
                    <a href="{{url('/component')}}" class="hover:text-orange-500 block mt-4 lg:inline-block lg:mt-0  mr-4">
                        Components
                    </a>
                    <a href="#" class="hover:text-orange-500 block mt-4 lg:inline-block lg:mt-0  mr-4">
                        Examples
                    </a>
                    <a href="https://github.com/MagedAhmad/Realtime-components" class="hover:text-orange-500 block mt-4 lg:inline-block lg:mt-0 ">
                        Github
                    </a>
                    </div>
                    <div>
                </div>
            </div>
            <div>
                @guest
                        <a class="hover:text-orange-500 text-gray-700 text-lg" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="hover:bg-orange-500 mx-2 hidden md:inline-block font-semibold rounded bg-gray-800 text-gray-200 p-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else

                <div class="dropdown inline-block relative hidden md:block">
                    <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                        <span class="mr-1">Options</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>
                    <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                        <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/profile/{{ auth()->id() }}">{{ Auth::user()->name }} </a></li>
                        <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a></li>
                    </ul>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            
            </div>
        </nav>
    </header>
