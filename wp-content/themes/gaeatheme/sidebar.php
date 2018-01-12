<nav id="navb">

    <ul>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="title" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.gaea.png" /></a>
    <!--    <h1 id="title"><a href="index.php">GAEA</a></h1>-->

        <?php wp_list_pages( '&title_li=&exclude=2,52,53,54' ); ?>
        <div id="language"><a>PT</a>/<a>ENG</a></div>
    </ul>



</nav>

<nav id="responsive_nav">

    <ul>
        <?php wp_list_pages( '&title_li=' ); ?>
        <li><a>PT</a>/<a>ENG</a></li>
    </ul>

    <i id="btn" class="fa fa-chevron-down fa-3x"  aria-hidden="true"></i>


</nav>