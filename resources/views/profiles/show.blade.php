@extends('components.app')

@section('content')
{{ $user->name }}
@foreach($user->components as $component)
    {{ $component->name }}
@endforeach

@endsection
