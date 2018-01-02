$(document).ready(function(){

    //START PARALLAX


    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene , {
        limitX: false,
        limitY: false,

    });


    //------------------------------------------------//

   if (location.pathname === '/Static-P3/index.php'){

       $("#navb").css("display", "none");

   }



    $(".scrollbar").scroll(function(){

        console.log($(this).scrollTop());

        if($(this).scrollTop() >= 800){

            $("#navb").css("display", "block");

        } else {
            $("#navb").css("display", "none");

        }
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

$grid.on( 'click', '.grid-item', function() {

    // change size of item by toggling gigante class
    $('.grid-item').removeClass('gigante');
    $('.viewmore').css('display','none');
    $(this).addClass('gigante');
    $(this).find(".viewmore").fadeIn(0);
    $grid.isotope('layout');

});

//------------------------------------------------------------//

});
