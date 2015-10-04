<div class="form-group">
{!! Form::submit($subscribe,['class' => 'btn btn-primary form-control']) !!}
</div>


{!! Form::open(['url' => 'subscribe']) !!}
        @include('articles.form', ['submitButtonText' => 'Подписаться'])
{!! Form::close() !!}
