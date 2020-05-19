@extends('components.app')


@section('content')
    <update-component :component="{{ json_encode($component) }}"></update-component>

    <preview body="{{ $component->body }}"></preview>
@endsection
