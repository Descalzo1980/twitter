@extends('app')


@section('content')
    <h1>{{ $article->title }}</h1>

    <article>
        {{ $article->body }}
        <div> {{ $article->user->username }}</div>
    </article>


@stop