$(document).ready(function () {
    var width = $( window ).width();
    if(width <= 526){
        $("#loginbtn").addClass( "mt-4 mb-2" );
    } else {
        $(".card").addClass( "h-100" );
    }
});