@extends('components.app')

@section('content')
<copy-button content="{{ $component->body }}"></copy-button>
<a href="{{ url($component->path() .'/download') }}">Download Component</a>

{{ $component->name }}
{{ $component->description }}
<a href="{{url('/component/'. $component->slug . '/edit')}}">Edit</a>
<preview body="{{ $component->body }}"></preview>

@include('components.comments')

@endsection
