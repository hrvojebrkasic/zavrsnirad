@extends('includes.dashboard')

@section('content')
    {!! Form::open() !!}

    <table id="input_fields_wrap">
        <h1>Stvori utakmicu</h1>
        <tr>
            <th>Kolo</th>
            <th>Liga</th>
            {{--<th>Sezona</th>--}}
            <th>Domacin</th>
            <th>Gost</th>
            <th>Br. poena domacina</th>
            <th>Br. poena gosta</th>
        </tr>
        <tr>
            <td><input type="text" style="width:50px;" id="round" name="game[0][round]"/></td>
            <td><input type="text" style="width:50px;" id="league_id" name="game[0][league_id]"/></td>
            {{--<td><input type="text" style="width:50px;" id="season_id" name="game[0][season_id]"/></td>--}}
            <td>{!! Form::select('game[0][hometeam_id]', $list, ['class' => 'form-control']) !!}</td>
            {{--<td><input type="text" id="hometeam_id" name="game[0][hometeam_id]" /></td>--}}
            <td>{!! Form::select('game[0][awayteam_id]', $list, ['class' => 'form-control']) !!}</td>
            {{--<td><input type="text" id="awayteam_id" name="game[0][awayteam_id]" /></td>--}}
            <td><input type="text" id="home_score" name="game[0][home_score]" /></td>
            <td><input type="text" id="away_score" name="game[0][away_score]" /></td>
            {{--<td>--}}
            {{----}}
            {{--<button type="button" id="delete">Delete</button>--}}
            {{--<button type="button" id="edit">Edit</button>--}}
            {{--</td>--}}
        </tr>
    </table>
    <input type="submit" value="Save" id="save" />

    {!! Form::open() !!}

    <button type="button" class="add_field_button">Nova utakmica</button>


@stop
@section('beforeBodyEnd')
    <script>
        jQuery(document).ready(function() {
            var wrapper         = jQuery("#input_fields_wrap"); //Fields wrapper
            var add_button      = jQuery(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            add_button.click(function(e){ //on add input button click
                e.preventDefault();

                wrapper.append('<tr>' +
                        '<td><input type="text" style="width:50px;" id="round" name="game['+x+'][round]"/></td>' +
                        '<td><input type="text" style="width:50px;" id="league_'+x+'" name="game['+x+'][league_id]"/></td>' +
                            //'<td><input type="text" style="width:50px;" id="season_'+x+'" name="game['+x+'][season_id]"/></td>' +
                            //'<td><input type="text" id="hometeam_id_'+x+'" name="game['+x+'][hometeam_id]"/></td>' +
                        '<td> <select name="game['+x+'][hometeam_id]">@foreach($list as $teamId=>$team_name)<option value="{{$teamId}}">{{$team_name}}</option>@endforeach</select></td>' +
                            //'<td><input type="text" id="awayteam_id_'+x+'" name="game['+x+'][awayteam_id]"/></td>' +
                        '<td> <select name="game['+x+'][awayteam_id]">@foreach($list as $teamId=>$team_name)<option value="{{$teamId}}">{{$team_name}}</option>@endforeach</select></td>' +
                        '<td><input type="text" id="home_score_'+x+'" name="game['+x+'][home_score]"/></td>' +
                        '<td><input type="text" id="away_score_'+x+'" name="game['+x+'][away_score]"/></td>' +
                        '<td>' +
                            //'<button type="button" id="save" onclick="saveDataRow("kolo_'+x+'", "home_team_id_'+x+'", "away_team_id_'+x+'", "home_score_'+x+'", "away_score_'+x+'")"><button>'+
                            //'<button type="button" id="delete_'+x+'">Delete</button>' +
                            //'<button type="button" id="edit_'+x+'">Edit</button>' +
                        '<button type="button" class="remove_field">Remove</button>' +
                        '</td></tr>'); //add input box
                x++;
            });

            wrapper.on("click",".remove_field", function(e){ //user click on remove button
                jQuery(this).closest('tr').remove();
            })
        });
    </script>
@stop