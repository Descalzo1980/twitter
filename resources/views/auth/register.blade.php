@extends('app')

@section('content')

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input type="text"  class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email"  class="form-control" id= "exampleInputEmail1" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password"  class="form-control" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password"  class="form-control" name="password_confirmation">
    </div>

    <div>
        <button type="submit" class="btn btn-default">Register</button>
    </div>
</form>

@stop