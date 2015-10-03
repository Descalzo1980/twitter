@extends('app')


@section('content')
    <h1>Articles</h1>

    <hr/>
    @include('articles._list')
    {{--@include('articles.subscribe')--}}

 @stop