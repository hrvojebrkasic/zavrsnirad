<div class="container-fluid">
    <div class="col-md-6">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Kolo</th>
                    <th>Domaćin</th>
                    <th>Gost</th>
                    <th>Rezultat</th>
                </tr>
                </thead>
                <tbody>
                @foreach($games as $game)
                    <tr>
                        <td align="center">{{ $game->round }}</td>
                        <td align="center">{{ $game->homeTeam->team_name }}</td>
                        <td align="center">{{ $game->awayTeam->team_name }}</td>
                        <td align="center">{{ $game->home_score }} : {{ $game->away_score }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>