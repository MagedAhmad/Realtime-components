@extends('components.app')

@section('content')

<show-components :data="{{ $user->components }}"></show-components>

@endsection
