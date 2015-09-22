@extends('app')


@section('content')
    <h1>{{ $article->title }}</h1>

    <article>
        {{ $article->body }}
        <div> {{ $article->user_id }}</div>
    </article>


@stop