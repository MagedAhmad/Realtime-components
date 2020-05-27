@extends('components.layout.app')


@section('content')
<div class="my-4 w-full md:w-1/2 mx-auto border rounded p-2 px-4">
    <div class="py-2">
        <div class="py-2">
            <div class="card">
                <div class="text-2xl my-2 text-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="text-xl py-2">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Enter your name" id="name" type="text" class="rounded border p-2 w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="text-xl py-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Enter your email address" id="email" type="email" class="rounded border p-2 w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="py-2 text-xl">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="********" id="password" type="password" class="rounded border p-2 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="py-2 text-xl">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input placeholder="********" id="password-confirm" type="password" class="rounded border p-2 w-full " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="my-2">
                            <div class="">
                                <button type="submit" class="hover:bg-orange-500 mx-2 hidden md:inline-block font-semibold rounded bg-gray-800 text-gray-200 p-2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
