@extends('components.layout.app')


@section('content')

    
<main class="bg-gray-800 pb-4">
    <div class="mx-4 md:mx-12">
        <update-component :component="{{ json_encode($component) }}"></update-component>

        <!-- preview section -->
        <div>
            <div class="md:py-4 w-full min-h-full">
                <a title="TailwindCSS Twitter Clone" class="flex flex-col rounded overflow-hidden" href="/component/twitter-clone">
                    <div style="height: 300px" class="bg-blue-100 overflow-hidden rounded-lg relative">
                        <!-- preview component goes here -->
                        <preview body="{{ $component->body }}" style="{{ $component->framework}}"></preview>

                    </div>
                </a>
            </div>
        </div>
        <!-- end of preview section  -->
    </div>
</main>



@endsection

