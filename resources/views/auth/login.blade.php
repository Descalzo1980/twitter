@extends('app')

@section('content')

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password"  class="form-control" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>

@stop