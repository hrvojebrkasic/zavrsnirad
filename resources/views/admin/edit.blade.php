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
        @foreach($article->medias as $media)
            <img src="{{URL::asset('/img/'.$media->file_name)}}">
        @endforeach
            {!! Form::file('photo[]', array('multiple'=>'true','class'=>'file')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Izmijeni članak', null, ['class' => 'btn btn-submit form-control']) !!}
    </div>
    {!! Form::close() !!}

@stop
