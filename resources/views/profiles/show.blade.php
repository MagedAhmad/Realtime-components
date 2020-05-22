@extends('components.app')

@section('content')
{{ $user->name }}
<show-components :data="{{ $user->components }}"></show-components>

@endsection
