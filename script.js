$(document).ready(function(){
    
viewHoroscope();

    saveHoroscope = function() {
    var personNR = $("#personNummer").val();

    if(personNR !== ""){
    $.ajax({
    type: "POST",
    url: "./addHoroscope.php",
    data: { personNR: personNR}
        })
    .done(function(data) {
        location.reload();
    });
    viewHoroscope();
}
else {
    alert("skriv pers");
}

}

function viewHoroscope(){

    $.ajax({
        type: "GET",
        url: "./viewHoroScope.php",
            })
        .done(function( msg ) {
            $("#myHoroscope").html(data);
            
        });
}

deleteHoroscope = function() {

    $.ajax({
        type: "DELETE",
        url: "./deleteHoroscope.php",
            })
        .done(function( msg ) {
            $("#myHoroscope").html(data);
        });
}


updateHoroscope = function() {
    var personNR = $("#personNummer").val();
    if(personNR !== ""){
    $.ajax({
    type: "PUT",
    url: "./updateHoroscope.php",
    data: { personNR: personNR}
        })
    .done(function(msg) {
        location.reload();
    });
    viewHoroscope();
}
else {
    alert("skriv pers");
}
}



});


