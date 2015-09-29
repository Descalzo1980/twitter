@extends('app')

@section('content')
    @include('articles._list', ['articles' => $stream])
@stop