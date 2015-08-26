@extends('includes.dashboard')

@section('content')

    <table id="input_fields_wrap">
        <tr>
            <th>Kolo</th>
            <th>Domacin</th>
            <th>Gost</th>
            <th>Br. poena domacina</th>
            <th>Br. poena gosta</th>
        </tr>
        <tr>
            <td><input type="text" id="kolo_id" name="kolo_id"/></td>
            <td>
                <select>
                    <option id="tim_id">tim_name</option>
                </select>
                <input type="text" id="home_team_id" name="home_team_id" /></td>
            <td><input type="text" id="away_team_id" name="away_team_id" /></td>
            <td><input type="text" id="home_score" name="home_score" /></td>
            <td><input type="text" id="away_score" name="away_score" /></td>
            <td>
                <button type="button" id="save" onclick="saveDataRow('kolo_id', 'home_team_id', 'away_team_id', 'home_score', 'away_score')"></button>
                <button type="button" id="delete">Delete</button>
                <button type="button" id="edit">Edit</button>
                <button type="button" class="add_field_button">Add new row</button>
            </td>
        </tr>
    </table>

    <script>
        function saveDataRow(el1, el2, el3, el4, el5) {

            $.ajax({
                url: "/admin/leagues/seniori",
                dataType: "json",
                data: {'kolo_id': el1, 'home_team_id': el2, 'away_team_id': el3, 'home_score': el4, 'away_score': el5},
                type: "GET",
                success: function (data) {
                    console.log('data');
                },
                error: function (data) {
                    return data;
                }
            });
        }
    </script>

@stop