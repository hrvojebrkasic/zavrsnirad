<div class="container-fluid">
    <div class="col-md-6">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Pos.</th>
                    <th>Tim</th>
                    <th>Ukupno utakmica</th>
                    <th>Pobjede</th>
                    <th>Porazi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1 ?>
                @foreach($foo as $index => $f)
                    <tr>
                        <td align="center">{{ $i++ }}</td>
                        <td align="center">{{ $f['name'] }}</td>
                        <td align="center">{{ $f['gamesPlayed'] }}</td>
                        <td align="center">{{ $f['won']}}</td>
                        <td align="center">{{ $f['lost']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>