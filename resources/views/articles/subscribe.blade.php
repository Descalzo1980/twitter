@extends('app')


@section('content')

    <div>
         @include('users.subscribe', ['subscribe' => 'Подписаться'])
    </div>



@stop