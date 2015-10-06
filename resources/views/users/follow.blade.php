@extends('app')

@section('content')
    <ul>

    @foreach($users as $user)
        <li>
            <p>{{ $user->username }}</p>
        </li>
    @endforeach
    </ul>
@stop