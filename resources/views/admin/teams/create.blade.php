@extends('includes.dashboard')

@section('content')

    <h1>Create new teams</h1>

    <hr/>

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('league_id', 'League ID: ') !!}
        {!! Form::text('league_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('team_name', 'Team name: ') !!}
        {!! Form::text('team_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create team', null, ['class' => 'btn btn-primary form-control']) !!}
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