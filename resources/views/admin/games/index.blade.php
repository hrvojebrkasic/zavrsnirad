@extends('includes.dashboard')

@section('content')

    <div class="container-fluid">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table">
                    <h1>Popis utakmica</h1>
                    <thead>
                    <tr>
                        <th>Kolo</th>
                        <th>Liga</th>
                        <th>Domacin</th>
                        <th>Gost</th>
                        <th>Rezultat</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($games as $game)
                        <tr>
                            <td>{{ $game->round }}</td>
                            <td>{{ $game->league->name }}</td>
                            <td>{{ $game->homeTeam->team_name }}</td>
                            <td>{{ $game->awayTeam->team_name }}</td>
                            <td>{{ $game->home_score }} : {{ $game->away_score }}</td>
                            {{--<td>--}}
                                {{--<!-- show the team -->--}}
                                {{--<a class="btn btn-small btn-success btn-block" href="{{ URL::to('admin/games/' . $game->id) }}">Show</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<!-- edit this team -->--}}
                                {{--<a class="btn btn-small btn-info btn-block" href="{{ URL::to('admin/games/' . $game->id . '/edit') }}">Edit</a>--}}
                            {{--</td>--}}
                            <td>
                                <!-- delete the team -->
                            <a class="btn btn-small btn-warning btn-block" href="{{ URL::to('admin/games/delete/' . $game->id) }}">Obriši</a>

                    </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@stop