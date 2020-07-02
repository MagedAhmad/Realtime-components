@extends('components.layout.app')

@section('content')

<main class="bg-gray-800 pb-4">
    <div class="mx-4 md:mx-12">
        <!-- Hero section -->
        <div class="flex flex-col">
            <div class="container mx-auto">
                <div class="mt-6 rounded-xl py-6 sm:py-12 lg:py-20 px-4 sm:px-6 lg:px-12 flex items-center relative">
                    <div class="sm:w-1/2">
                        <h1 class="text-center sm:text-left text-2xl sm:text-3xl text-gray-300 mb-2 leading-snug"><strong class="underline logo">ONLINE FLY</strong> is a free online software </h1>
                        <h2 class="text-center sm:text-left text-gray-300 sm:text-lg mb-6 lg:pr-12">To build and share Components with variety of supported frameworks</h2>
                        <div class="h-16 sm:pr-12">
                            <form action="/search" class="relative">
                                <input type="search" name="query" class="p-4 text-gray-700 w-full bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400" placeholder="Search components">
                                <button type="submit" class="hover:bg-orange-500 bg-gray-800 text-gray-300 rounded font-lg absolute top-0 right-0 bottom-0 mt-1 mr-1 mb-1 px-8 font-semibold">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="hidden sm:block w-1/2 h-full absolute top-0 right-0 mt-8 mt-24 md:mt-0">
                        <img class="w-full md:w-4/5 md:ml-12 md:mt-4" src="{{ url('/images/undraw_work_together_h63l.svg') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Hero section -->

        <!-- components gallery -->
        <div>
            <show-components></show-components>
        </div>
        <!-- End of component gallery -->

    </div>
    
</main>

@endsection
