@extends('components.layout.app')

@section('content')

<div class="mt-8 bg-white py-4 mx-4 md:mx-12 flex space-between flex-col md:flex-row">
    <!-- left side  -->
    <div class="w-full md:w-1/2">
        <!-- <h1 class="text-gray-800 font-bold py-2 text-2xl">Realtime Components</h1> -->
        <p class="text-gray-800 py-2 text-5xl font-bold">Realtime Components<br><span class="text-2xl"> A Cool Platform To share code snippets and try different frameworks</span></p>
        <a href="https://twitter.com/DevMaged" class="bg-gray-200 my-2 font-semibold p-2 hover:bg-gray-800 hover:text-white rounded mr-2"><i class="fa fa-plus"></i> Follow</a>
        <a href="https://github.com/MagedAhmad/Realtime-components" class="bg-gray-200 my-2 font-semibold p-2 hover:bg-gray-800 hover:text-white rounded mr-2"><i class="fa fa-github"></i> Github</a>
    </div>
    <!-- end of left side  -->

    <!-- right side  -->
    <div class="w-full md:w-1/2 h-full hidden md:block ml-32 mb-4">
        <img src="{{url('images/undraw2.svg')}}" class="w-3/4" alt="Profile card">
    </div>
    <!-- end of right side  -->
</div>

<main class="bg-gray-800 pb-4">
    <div class="mx-4 md:mx-12">
        <!-- Hero section -->
        <!-- End of Hero section -->

        <!-- components gallery -->
        <div>
            <show-components></show-components>
        </div>
        <!-- End of component gallery -->

    </div>
    
</main>

@endsection
