 {!! Form::open(['action' =>['UsersController@follow', $user->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Подписаться!') !!}
    </div>
 {!! Form::close() !!}




