@extends('includes.dashboard')

@section('content')

    <h1>Popis svih ekipa</h1>
    <div class="container-fluid">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID lige</th>
                        <th>Ime lige</th>
                        <th>Ime</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->league->id }}</td>
                            <td>{{ $team->league->name }}</td>
                            <td>{{ $team->team_name }}</td>
                            {{--<td>--}}
                                {{--<!-- show the team -->--}}
                                {{--<a class="btn btn-small btn-success btn-block" href="{{ URL::to('admin/teams/' . $team->id) }}">Show</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<!-- edit this team -->--}}
                                {{--<a class="btn btn-small btn-info btn-block" href="{{ URL::to('admin/teams/' . $team->id . '/edit') }}">Edit</a>--}}
                            {{--</td>--}}
                            <td>
                                <a class="btn btn-small btn-warning btn-block" href="{{ URL::to('admin/teams/delete/' . $team->id) }}">Obriši</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop