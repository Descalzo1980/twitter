@extends('app')

@section('content')
    {{ $user->username }}
    @include('users._list', ['users' => $user->followers])
    @include('users._list', ['users' => $user->followed])
@stop
