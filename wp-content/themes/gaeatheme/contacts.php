<!doctype html>
<html class="no-js" lang="pt">

<?php include 'parts/head.php' ?>

<body>
<div class="scrollbar" id="style-3">
    <div class="force-overflow">

        <div class="row">
            <div class="col-2">
                <?php include 'parts/navbar.php' ?>
            </div>
            <div class="col-10">


    <h1 id="tit">CONTACTS</h1>

    <div id="address">
        <p>Fell free to contact us anytime.</p>

        <br>
        <i class="fa fa-map-marker" aria-hidden="true"></i>
       <p> Street Indústria do Papel, Nº 104 <br>
        3305-096 - Coimbra</p><br>
        <i class="fa fa-phone" aria-hidden="true"></i>
       <p> 21 239 329 1323</p>



    </div>
<div class="emailform">
    <i class="fa fa-envelope-o" aria-hidden="true"></i>
    <form action="envia.php" method="POST">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input id="messageBox" type="text" name="message" placeholder="Message" required><br>
        <input class="inputButton" type="submit" value="Send">
        <input class="inputButton" type="reset" value="Reset">
    </form>
</div>

    <footer>
        <p>GAEA® is a registered trademark.</p>
    </footer>
</div>
    </div>


<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
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

    </div>
</div>
</body>
</html>
