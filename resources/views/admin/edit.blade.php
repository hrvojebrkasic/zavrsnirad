@extends('includes.dashboard')

@section('content')

    {!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('title', 'Article title: ') !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Content: ') !!}
        {!! Form::textarea('content', $article->content, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit article', null, ['class' => 'btn btn-submit form-control']) !!}
    </div>
    {!! Form::close() !!}

@stop
