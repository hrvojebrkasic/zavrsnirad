@extends('includes.dashboard')

@section('content')

    <h1>Write new article</h1>

    <hr/>

    {!! Form::open(['url' => 'article', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Article title: ') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content', 'Content: ') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Image: ') !!}
            {{--{!! Form::file('photo') !!}--}}
            {!! Form::file('photos[]', array('multiple'=>'true','id'=>'image-input','class'=>'file')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add article', null, ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    @endif
@stop