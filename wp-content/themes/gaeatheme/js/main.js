$(document).ready(function () {


    //  window.onload = function () {


    //---------------------DETETAR BROWSER------------------------//

    // Opera 8.0+
    var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

    // Firefox 1.0+
    var isFirefox = typeof InstallTrigger !== 'undefined';

    // Safari 3.0+ "[object HTMLElementConstructor]"
    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);

    // Internet Explorer 6-11
    var isIE = /*@cc_on!@*/false || !!document.documentMode;

    // Edge 20+
    var isEdge = !isIE && !!window.StyleMedia;

    // Chrome 1+
    var isChrome = !!window.chrome && !!window.chrome.webstore;

    // Blink engine detection
    var isBlink = (isChrome || isOpera) && !!window.CSS;




    if (isChrome || isBlink){
        $(".KW_progressContainer").css("display", "block");
    }else{
        $(".KW_progressContainer").css("display", "none");

    }



//-------------------------RESPONSIVE NAV-------------------------//

    if (window.innerWidth < 600) {

        $("#navb ").css(" display", "none");
        $("#gaeacontainer").css("display", "none");


        var count = 0;


        /*  if (count === 0) {
              $("#navb ").css(" display", "none");

          } else {

              $("#navb ").css(" display", "block");

          }*/
        $("#responsive_nav ul").slideUp(0);

        $("#responsive_nav").click(function () {


            if (count % 2 === 0) {
                $("#responsive_nav ul").slideDown(0);
                $("#responsive_nav").css("height", "100vh");
               $("#btn").css("transform", " rotate(180deg)");

                count += 1;
            } else {


                $("#responsive_nav ul").slideUp(0);
                $("#responsive_nav ").css("height", "10vh");
                $("#btn").css("transform", " rotate(360deg)");

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
      //  $(".grid-item").find(".index_titles").css("visibility" , "hidden");
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


    var resp = document.getElementById('responsiveimagemain');

    var parallaxInstance = new Parallax(resp, {
        limitX: false,
        limitY: false,

    });


    /*------------------------------------------*/

    //   }

    $("#yfmimage").hover(function(){
        $("#yfmtext").show();
    });
    $("#yfmtext").hover(function(){
        $("#yfmtext").show();
    }, function () {
        $("#yfmtext").hide();
    });


});


