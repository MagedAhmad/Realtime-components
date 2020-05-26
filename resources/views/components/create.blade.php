@extends('components.layout.app')

@section('content')

    <main class="bg-gray-800 pb-4">
        <div class="mx-4 md:mx-12">
            <div class="pt-4">
                <span class="text-2xl text-white font-bold my-2">Create Component</span>
                <p class="text-gray-600 text-lg">
                    Don't forget to check on all responsive sizes. 
                </p>
            </div>

            <create-component></create-component>

            <!-- preview section -->
            <div>
                <div class="md:py-4 w-full min-h-full">
                    <a title="TailwindCSS Twitter Clone" class="flex flex-col rounded overflow-hidden" href="/component/twitter-clone">
                        <div style="height: 300px" class="bg-blue-100 overflow-hidden rounded-lg relative">
                            <!-- preview component goes here -->
                            <preview></preview>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end of preview section  -->
        </div>
    </main>
@endsection
