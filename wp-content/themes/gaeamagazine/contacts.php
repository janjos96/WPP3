<!doctype html>
<html class="no-js" lang="pt">

<?php include 'parts/head.php' ?>

<body>

<?php include 'parts/navbar.php' ?>

<div id="language"><a>PT</a>/<a>ENG</a></div>

<div class="contentarea">


    <h1 id="tit">CONTACTS</h1>

    <p>adress</p></br>
    <p>king cross street</p>
    <p>phone</p></br>
    <p>54654655665</p>

    <form action="envia.php" method="POST">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input id="messageBox" type="text" name="message" placeholder="Message" required><br>
        <input class="inputButton" type="submit" value="Send">
        <input class="inputButton" type="reset" value="Reset">
    </form>


    <footer>
        <p>GAEA® is a registered trademark.</p>
    </footer>
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
</body>
</html>
