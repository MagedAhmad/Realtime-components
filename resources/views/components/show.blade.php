@extends('components.app')

@section('content')
{{ $component->name }}
{{ $component->description }}
<a href="{{url('/component/'. $component->slug . '/edit')}}">Edit</a>
<preview body="{{ $component->body }}"></preview>
@endsection
