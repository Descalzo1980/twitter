@extends('app')


@section('content')

    <div>
         @include('users._subscribe', ['subscribe' => 'Подписаться'])
    </div>

@stop