$(document).ready(function(){




//isotype js


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




    var scrollPos = 0;
    var Counter = 0;
    $(window).scroll(function(){
        var scrollPosCur = $(this).scrollTop();
        if (scrollPosCur > scrollPos) {
            Counter += 1;
            console.log(Counter);

        } else {
            Counter -= 1;
            console.log(Counter);


        }
        scrollPos = scrollPosCur;
    });

});