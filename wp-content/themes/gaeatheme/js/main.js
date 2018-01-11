$(document).ready(function () {


    //  window.onload = function () {


//-------------------------RESPONSIVE NAV-------------------------//

    if (window.innerWidth < 600) {

        $("#navb ").css(" display", "none");


        var count = 0;


        /*  if (count === 0) {
              $("#navb ").css(" display", "none");

          } else {

              $("#navb ").css(" display", "block");

          }*/
        $("#responsive_nav ul").slideUp(0);

        $("#btn").click(function () {


            if (count % 2 === 0) {
                $("#responsive_nav ul").slideDown(0);
                $("#responsive_nav").css("height", "100vh");
                $(this).css("transform", " rotate(180deg)");

                count += 1;
            } else {


                $("#responsive_nav ul").slideUp(0);
                $("#responsive_nav ").css("height", "10vh");
                $(this).css("transform", " rotate(360deg)");

                count += 1;
            }


        });


    } else {

        $("#responsive_nav ").css(" display", "block");

    }


    //------------------------------------------------//




    $(".scrollbar").scroll(function () {

        var scroll_height = $(".force-overflow").height();
        var window_height = $(window).height();
        var scroll_top = $(this).scrollTop();


        var totalScroll = (scroll_top / (scroll_height - window_height) * 100);

        $(".KW_progressBar").css("height", totalScroll + "vh");

    });


//-----------------------------------------------------------//

//ISOTYPE JS


    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        transitionDuration: 0,
        masonry: {
            columnWidth: 100,

        }
    });

    $grid.on('click', '.grid-item', function () {

        // change size of item by toggling gigante class
        $('.grid-item').removeClass('gigante');
        $('.viewmore').css('display', 'none');
        // $(".grid-item").find(".index_titles").css("visibility" , "hidden");
        $(this).find(".index_titles").css("visibility" , "visible");
        $(this).addClass('gigante');
        $(this).find(".viewmore").fadeIn(0);
        $grid.isotope('layout');

    });


//------------------------------------------------------------//

    //START PARALLAX


    var scene = document.getElementById('scene');

    var parallaxInstance = new Parallax(scene, {
        limitX: false,
        limitY: false,

    });
    /*------------------------------------------*/

    //   }


});


