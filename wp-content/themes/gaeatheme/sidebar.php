<nav id="navb">

    <ul>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="title" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.gaea.png" /></a>
    <!--    <h1 id="title"><a href="index.php">GAEA</a></h1>-->

        <?php wp_list_pages( '&title_li=&exclude=2' ); ?>
        <li class="page_item social"><a><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
        <li class="page_item social"><a> <i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
        <div id="language"><a>PT</a>/<a>ENG</a></div>
    </ul>

</nav>