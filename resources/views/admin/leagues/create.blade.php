@extends('includes.dashboard')

@section('content')

    <h1>Create new league</h1>

    <hr/>

    {!! Form::open(['url' => 'admin']) !!}
    <div class="form-group">
        {!! Form::label('name', 'League name: ') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create league', null, ['class' => 'btn btn-primary form-control']) !!}
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