@extends('includes.dashboard')

@section('content')

    <h1>List of all teams</h1>
    <div class="container-fluid">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>League ID</th>
                        <th>League name</th>
                        <th>Club name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->league->id }}</td>
                            <td>{{ $team->league->name }}</td>
                            <td>{{ $team->team_name }}</td>
                            <td>
                                <!-- show the team -->
                                <a class="btn btn-small btn-success btn-block" href="{{ URL::to('admin/teams/' . $team->id) }}">Show</a>
                            </td>
                            <td>
                                <!-- edit this team -->
                                <a class="btn btn-small btn-info btn-block" href="{{ URL::to('admin//teams' . $team->id . '/edit') }}">Edit</a>
                            </td>
                            <td>
                                <!-- delete the team -->
                                {!! Form::open(['url' => 'admin/teams' . $team->id, 'class' => 'pull-left']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-warning btn-block')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop