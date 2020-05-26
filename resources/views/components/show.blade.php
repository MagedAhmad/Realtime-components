@extends('components.layout.app')

@section('content')
    <main class="bg-gray-800 pb-4">
        <div class="mx-4 md:mx-12">
            <!-- show component area -->
            <div class="flex flex-col md:flex-row justify-between py-4">
                <!-- left side -->
                <div class="pt-8 w-full md:w-1/3 text-gray-300 flex-col justify-between">
                    <div class="flex-1">
                        <h2 class="font-bold text-lg">{{ $component->name }}</h2>
                        <p class="text-gray-400"><span class="text-gray-600">by </span>Maged Ahmad</p>
                        <p class="text-gray-200 font-lg my-2">{{ $component->description }}</p>
                    </div>
                    <div class="py-4">
                        <div>
                            <a href="{{url('/component/'. $component->slug . '/edit')}}" class="bg-gray-800 hover:bg-orange-500 hover:text-white border border-orange-500 rounded text-orange-500 p-2 my-2"><i class="fa fa-edit"></i> Edit</a>
                            <a href="{{ url($component->path() .'/download') }}" class="bg-gray-800 hover:bg-orange-500 hover:text-white border border-orange-500 rounded text-orange-500 p-2 my-2"><i class="fa fa-download"></i> Download</a>
                            <copy-button content="{{ $component->body }}"></copy-button>
                        </div>
                        <div class="mt-4 hidden md:block">
                            <h2 class="text-lg py-2">Rating</h2>
                            <div class="main-container">
                                <div class="inner-content">
                                    <input type="radio" name="starRating" id="star1" class="hidden">
                                    <label for="star1"><i class="fa fa-star-o text-gray-200"></i></label>
                                    <input type="radio" name="starRating" id="star2" class="hidden">
                                    <label for="star2"><i class="fa fa-star-o text-gray-200"></i></label>
                                    <input type="radio" name="starRating" id="star3" class="hidden">
                                    <label for="star3"><i class="fa fa-star-o text-gray-200"></i></label>
                                    <input type="radio" name="starRating" id="star4" class="hidden">
                                    <label for="star4"><i class="fa fa-star-o text-gray-200"></i></label>
                                    <input type="radio" name="starRating" id="star5" class="hidden">
                                    <label for="star5"><i class="fa fa-star-o text-gray-200"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- End of left side -->

                <!-- right side -->
                <div class="md:py-4 w-full md:w-2/3 min-h-full">
                    <a title="TailwindCSS Twitter Clone" class="flex flex-col rounded overflow-hidden" href="/component/twitter-clone">
                        <div style="height: 300px" class="bg-blue-100 overflow-hidden rounded-lg relative">
                            <!-- preview component goes here -->
                            <preview body="{{ $component->body }}"></preview>
                        </div>
                    </a>
                </div>
                <!-- End of right side -->
                <div class="mt-4 md:hidden">
                    <h2 class="text-gray-200 text-lg py-2">Rating</h2>
                    <div class="main-container">
                        <div class="inner-content">
                            <input type="radio" name="starRating" id="star1-mob" class="hidden">
                            <label for="star1-mob"><i class="fa fa-star-o text-gray-200"></i></label>
                            <input type="radio" name="starRating" id="star2-mob" class="hidden">
                            <label for="star2-mob"><i class="fa fa-star-o text-gray-200"></i></label>
                            <input type="radio" name="starRating" id="star3-mob" class="hidden">
                            <label for="star3-mob"><i class="fa fa-star-o text-gray-200"></i></label>
                            <input type="radio" name="starRating" id="star4-mob" class="hidden">
                            <label for="star4-mob"><i class="fa fa-star-o text-gray-200"></i></label>
                            <input type="radio" name="starRating" id="star5-mob" class="hidden">
                            <label for="star5-mob"><i class="fa fa-star-o text-gray-200"></i></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of show component area -->

            <!-- comment area -->
            <div class="w-full">
                @include('components.comments')
            </div>
            <!-- end of comment area  -->


            <!-- similar components -->
            <div class="w-full">
                <h1 class="text-gray-200 underline text-xl font-bold mt-12">Related Components</h1>
                <div class="flex-1 grid grid-column gap-8 py-8">
                    <a title="TailwindCSS Twitter Clone" class="flex flex-col rounded overflow-hidden" href="/component/twitter-clone">
                        <div class="h-48 xl:h-64 bg-blue-100 overflow-hidden rounded-lg relative">
                            <img loading="lazy" class="w-full h-full object-cover" src="/storage/1240/conversions/temp38981-thumb.jpg">
                        </div>
                        <div class="mt-3">
                            <div class="flex">
                                <div class="rounded-full border-solid border-2 border-orange-500 h-8 w-8 flex-shrink-0 mr-3 mt-1 overflow-hidden shadow-inner relative">
                                    <img loading="lazy" src="https://avatars1.githubusercontent.com/u/42153098?v=4" class="absolute inset-0 z-negative w-full h-full">
                                </div>
                                <div class="flex-1 leading-snug w-0">
                                    <h4 class="hover:text-orange-500 text-gray-200 whitespace-no-wrap text-secondary font-bold truncate hover:text-primary">Another component</h4>
                                    <p class="text-sm text-gray-500">Maged Ahmed</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a title="TailwindCSS Twitter Clone" class="flex flex-col rounded overflow-hidden" href="/component/twitter-clone">
                        <div class="h-48 xl:h-64 bg-blue-100 overflow-hidden rounded-lg relative">
                            <img loading="lazy" class="w-full h-full object-cover" src="/storage/1240/conversions/temp38981-thumb.jpg">
                        </div>
                        <div class="mt-3">
                            <div class="flex">
                                <div class="rounded-full border-solid border-2 border-orange-500 h-8 w-8 flex-shrink-0 mr-3 mt-1 overflow-hidden shadow-inner relative">
                                    <img loading="lazy" src="https://avatars1.githubusercontent.com/u/42153098?v=4" class="absolute inset-0 z-negative w-full h-full">
                                </div>
                                <div class="flex-1 leading-snug w-0">
                                    <h4 class="hover:text-orange-500 text-gray-200 whitespace-no-wrap text-secondary font-bold truncate hover:text-primary">Another component</h4>
                                    <p class="text-sm text-gray-500">Maged Ahmed</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a title="TailwindCSS Twitter Clone" class="flex flex-col rounded overflow-hidden" href="/component/twitter-clone">
                        <div class="h-48 xl:h-64 bg-blue-100 overflow-hidden rounded-lg relative">
                            <img loading="lazy" class="w-full h-full object-cover" src="/storage/1240/conversions/temp38981-thumb.jpg">
                        </div>
                        <div class="mt-3">
                            <div class="flex">
                                <div class="rounded-full border-solid border-2 border-orange-500 h-8 w-8 flex-shrink-0 mr-3 mt-1 overflow-hidden shadow-inner relative">
                                    <img loading="lazy" src="https://avatars1.githubusercontent.com/u/42153098?v=4" class="absolute inset-0 z-negative w-full h-full">
                                </div>
                                <div class="flex-1 leading-snug w-0">
                                    <h4 class="hover:text-orange-500 text-gray-200 whitespace-no-wrap text-secondary font-bold truncate hover:text-primary">Another component</h4>
                                    <p class="text-sm text-gray-500">Maged Ahmed</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
            
            <!-- end of similar components -->
        </div>
        

    </main>
@endsection
