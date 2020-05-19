@extends('components.app')

@section('content')
{{ $component->name }}

<editor body="{{ $component->body }}"></editor>
<preview></preview>
@endsection
