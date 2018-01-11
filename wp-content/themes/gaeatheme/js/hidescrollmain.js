$(document).ready(function () {




        $("#navb").css("visibility", "hidden");


        $(".scrollbar").scroll(function () {


            if ($(this).scrollTop() >= 780) {

                /*  $("#navb").fadeIn(0);*/
                $("#navb").css("visibility", "visible");


            } else {
                $("#navb").css("visibility", "hidden");

            }
        });






});