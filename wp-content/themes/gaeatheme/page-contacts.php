<?php
/**
 * Template Name: Contacts Layout
 */

get_header(); ?>

<div class="scrollbar" id="style-3">
    <div class="force-overflow">


    <div class="row">

    <div class="col-2">

        <?php get_sidebar(); ?>

    </div>


    <div class="col-10">

        <br>
        <br>
        <br>
        <br>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>

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

        </main><!-- #main -->



    </div><!-- #primary -->


    <?php get_footer(); ?>
