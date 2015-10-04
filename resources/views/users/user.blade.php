@extends('app')

@section('content')

@foreach ($users as $user) {
    {{ $user->username }};
}
@endforeach
@stop


