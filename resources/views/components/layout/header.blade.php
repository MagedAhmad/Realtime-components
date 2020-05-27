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
    <div id="app">
    <header class="antialiased">
        <nav class="flex items-center justify-between flex-wrap bg-white p-6">
            
            <div class="block lg:hidden text-gray-600">
                <button class="flex items-center px-3 py-2" onClick="toggleNavbar()">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>

            <div class="flex items-center flex-shrink-0 text-white mr-6 text-gray-900">
                <span class="logo font-semibold text-xl tracking-tight">ONLINE FLY</span>
            </div>
            
            <div id="navbar" class="w-full hidden block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow text-gray-600 text-lg font-semibold">
                    <a href="{{url('/component')}}" class="hover:text-orange-500 block mt-4 lg:inline-block lg:mt-0  mr-4">
                        Components
                    </a>
                    <a href="#" class="hover:text-orange-500 block mt-4 lg:inline-block lg:mt-0  mr-4">
                        Examples
                    </a>
                    <a href="https://github.com/MagedAhmad/Realtime-components" class="hover:text-orange-500 block mt-4 lg:inline-block lg:mt-0 md:mr-4">
                        Github
                    </a>
                    <a href="{{ url('/component/create') }}" class="hover:text-orange-500 block mt-4 lg:inline-block lg:mt-0">
                        Create Component
                    </a>
                    </div>
                    <div>
                </div>
            </div>
            <div>
                @guest
                    @include('layouts.login_modal')
                    @if (Route::has('register'))
                        <a class="hover:bg-orange-500 mx-2 hidden md:inline-block font-semibold rounded bg-gray-800 text-gray-200 p-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                <div class="hidden md:block">
                    <a class="hover:text-orange-500 text-gray-700 text-lg mr-4" href="{{ url('/profile/' . auth()->id() ) }}">{{ auth()->user()->name }}</a>
                    <a class="hover:text-orange-500 text-gray-700 text-lg mr-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                </div>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            
            </div>
        </nav>
    </header>
