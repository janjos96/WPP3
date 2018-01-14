$(document).ready(function () {




        $("#navb").css("visibility", "hidden");


        $(".scrollbar").scroll(function () {


            if ($(this).scrollTop() >= 780) {

                /*  $("#navb").fadeIn(0);*/
                $("#navb").css("visibility", "visible");
                $("#barrabranca").css("display", "block");



            } else {
                $("#navb").css("visibility", "hidden");
                $("#barrabranca").css("display", "none");

            }
        });






});