$(document).ready(function () {




        $("#navb").css("visibility", "hidden");
    $("#gaeacontainer").css("display", "none");


        $(".scrollbar").scroll(function () {


            if ($(this).scrollTop() >= 780) {

                /*  $("#navb").fadeIn(0);*/
                $("#navb").css("visibility", "visible");
                $("#gaeacontainer").css("display", "block");



            } else {
                $("#navb").css("visibility", "hidden");
                $("#gaeacontainer").css("display", "none");

            }
        });






});