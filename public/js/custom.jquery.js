$(document).ready(function() {
    var wrapper         = $("#input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    add_button.click(function(e){ //on add input button click
        e.preventDefault();

            wrapper.append('<tr>' +
                '<td><input type="text" id="kolo_'+x+'" name="kolo_id_'+x+'"/></td>' +
                '<td><input type="text" id="home_team_id_'+x+'" name="home_team_id_'+x+'"/></td>' +
                '<td><input type="text" id="away_team_id_'+x+'" name="away_team_id_'+x+'"/></td>' +
                '<td><input type="text" id="home_score_'+x+'" name="home_score_'+x+'"/></td>' +
                '<td><input type="text" id="away_score_'+x+'" name="away_score_'+x+'"/></td>' +
                '<td>' +
                //'<button type="button" id="save" onclick="saveDataRow("kolo_'+x+'", "home_team_id_'+x+'", "away_team_id_'+x+'", "home_score_'+x+'", "away_score_'+x+'")"><button>'+
                '<button type="button" id="delete_'+x+'">Delete</button>' +
                '<button type="button" id="edit_'+x+'">Edit</button>' +
                '<button type="button" class="remove_field">Remove</button>' +
                '</td></tr>'); //add input box
    x++;
    });

    wrapper.on("click",".remove_field", function(e){ //user click on remove button
        $(this).closest('tr').remove();
    })
});

//function saveDataRow(el1, el2, el3, el4, el5) {
//
//    $.ajax({
//        url: "/admin/leagues/seniori",
//        dataType: "json",
//        data:{'kolo_id' : el1, 'home_team_id' : el2, 'away_team_id' : el3, 'home_score' : el4, 'away_score' : el5},
//        type: "POST",
//        success: function(data) {
//            displaySuccess();
//        },
//        error: function() {
//            displayError();
//        }
//    });
//}


