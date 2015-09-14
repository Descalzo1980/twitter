@extends('app')

@section('content')
    <h1>Write a new twitte</h1>


    <hr/>

    {!! Form::open(['url' => 'articles']) !!}
        @include('articles.form', ['submitButtonText' => 'Add twitte'])
    {!! Form::close() !!}

    @include('errors.list')
@stop