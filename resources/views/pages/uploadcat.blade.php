@include('app')

<div class="form-group">
    {!! Form::label('Выбери котика') !!}
    {!! Form::file('image', null) !!}
</div>

<div class="form-group">
    {!! Form::submit('Загрузи котика') !!}

</div>
