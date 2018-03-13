$(document).ready(function(){

viewHoroscope();

    saveHoroscope = function() {
    //console.log("knappen fungerar");
    var personNR = $("#personNummer").val();
    //console.log($personNummer);
    if(personNR !== ""){
    $.ajax({
    type: "POST",
    url: "./addHoroscope.php",
    data: { personNR: personNR}
        })
    .done(function(msg) {
        //$("#myHoroscope").html(msg);
        //alert( "Data Saved: " + msg );
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
            $("#myHoroscope").html(msg);
            //alert( "Data Saved: " + msg );
        });
}

deleteHoroscope = function() {

    $.ajax({
        type: "DELETE",
        url: "./deleteHoroscope.php",
            })
        .done(function( msg ) {
            $("#myHoroscope").html(msg);
            //alert( "Data Saved: " + msg );
        });

}


updateHoroscope = function() {
    //console.log("knappen fungerar");
    var personNR = $("#personNummer").val();
    //console.log($personNummer);
    if(personNR !== ""){
    $.ajax({
    type: "POST",
    url: "./updateHoroscope.php",
    data: { personNR: personNR}
        })
    .done(function(msg) {
        //$("#myHoroscope").html(msg);
        //alert( "Data Saved: " + msg );
        location.reload();
    });
    viewHoroscope();
}
else {
    alert("skriv pers");
}
}



});


