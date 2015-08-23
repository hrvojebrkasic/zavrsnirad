@extends('includes.dashboard')

@section('content')

    {!! Form::model($article,[
        'method' => 'PATCH',
        'route' => ['admin.update', $article->id] ]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Article title: ') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Content: ') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit article', null, ['class' => 'btn btn-submit form-control']) !!}
    </div>
    {!! Form::close() !!}

@stop
