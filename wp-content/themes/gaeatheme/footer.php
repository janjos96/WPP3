<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gaeatheme
 */

?>


<footer>
    <p>GAEA® is a registered trademark.</p>
</footer>

</div>
</div>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/isotope.pkgd.min.js"></script>

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

<?php wp_footer(); ?>

</body>
</html>
