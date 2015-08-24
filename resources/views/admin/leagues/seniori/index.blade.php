@extends('includes.dashboard')

@section('content')

    <table>
        <tr>
            <td>Kolo</td>
            <td>Domacin</td>
            <td>Gost</td>
            <td>Rezultat</td>
        </tr>
        <tr>
            <td><input type="text" id= "1.kolo" name="kolo_id"/></td>
            <td>
                <select>
                    <option id="tim_id">tim_name</option>
                </select>
                <input type="text" id="1_tim1" name="homeTeam_id" /></td>
            <td><input id="1_tim2" /></td>
            <td><input id="1_score" /></td>
            <td>
                <input type="button" id="1_save" onclick="saveDataRow('1_name', '1_second_name', '1_grade', '1_score')" />
                <input type="button" id="1_delete" />
                <input type="button" id="1_edit" />
                <input type="button" id="1_add_new_row" />
            </td>
        </tr>
    </table>

    <script type="text/javascript">

        function saveDataRow(el1, el2, el3, el4) {

            $.ajax({
                url: URL,
                dataType: "json",
                data:{'el1' : el1, 'el2' : el2, 'el3' : el3, 'el4' : el4 },
                type: "get",
                success: function(data) {
                    displaySuccess();
                },
                error: function() {
                    displayError();
                }
            });
        }

    </script>

@stop