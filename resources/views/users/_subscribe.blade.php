{{--<div class="form-group">--}}
{{--{!! Form::submit($subscribe,['class' => 'btn btn-primary form-control']) !!}--}}
{{--</div>--}}

{!! Form::open(['url' => 'subscribe']) !!}
        {!! Form::submit($subscribe,['class' => 'btn btn-primary form-control']) !!}
{!! Form::close() !!}
