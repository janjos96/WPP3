<!doctype html>
<html class="no-js" lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GAEA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="../site.webmanifest">
    <link rel="apple-touch-icon" href="../icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/isotype.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <link href="plugs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core JavaScript -->
    <script src="plugs/jquery/jquery.min.js"></script>
    <script src="plugs/popper/popper.min.js"></script>
    <script src="plugs/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <style>
        .column p, .column h1 {
            padding: 5px;
        }

        #wrapper {
            margin: 0px 100px;
        }

        .wide1, .thin {
            clear: both;
        }

        img {
            float: left;
            margin: 4px;
        }
    </style>

</head>

<body>
<div class="scrollbar" id="style-3">
    <div class="force-overflow">
<div class="row">
    <div class="col-2">
        <?php include 'parts/navbar.php' ?>
    </div>
    <div class="col-9">

        <section id="latestarticles">

            <h1>A Year From Monday</h1>

            <div class="wrapper">
                <div class="wide">
                    <p>The question is: Is my thought changing? I t is and it isn't. One evening after dinner i was
                        telling friends that I was now concerned with improving the world. One of them said: I thought
                        you always - were. I then explained that I believe—and am acting upon—Marshall McLuhan's
                        statement that we have through electronic technology ptroduced an extension of our brains to the
                        world formerly outside of us. To me that means that the disciplines, gradual and sudden
                        (principally Oriental), formerly practiced by individuals to pacify their minds, bringing them
                        into accord with ultimate reality, must now be practiced socially-that is, not just inside our
                        heads, but butside of them, in the world; where our central nervous system now is. This has
                        brought it about that the work and thought of Bjckminster Fuller is of prime importance to me.
                        He more than any other to my knowledge sees the world situation—all of it— clearly and has fully
                        reasoned projects for turning our, attention away from "killingry" toward "livingry.''
                    </p>
                </div>
            </div>

            <img src="img/a%20year%20from%20monday%20image.png" style="width: 100%; margin-bottom: 2rem;" id="yfmimage">
            <img src="img/a%20year%20from%20monday%20text.png" style="width: 100%; margin-bottom: 2rem; position: absolute; left:0%; display: none;" id="yfmtext">

        </section>

    </div>
    <div class="col-1"><a>PT</a>/<a>ENG</a></div>
</div>

<footer>
    <p>GAEA® is a registered trademark.</p>
</footer>


<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/isotope.pkgd.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
</script>


<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<script src="columnizer/src/jquery.columnizer.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(document).ready(function(){

        $("#yfmimage").hover(function(){
            $("#yfmtext").show();
        });
        $("#yfmtext").hover(function(){
            $("#yfmtext").show();
        }, function () {
            $("#yfmtext").hide();
        });
    });
    $(function () {
        $('h1').addClass("dontend");
        $('.wide').columnize({
            columns: 2,
        });
    });
</script>

    </div>
</div>
</body>
</html>
