<?php
/**
 * Template Name: Editions Layout
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

                get_template_part( 'template-parts/content', 'title' );
            endwhile; // End of the loop.
            ?>


            <?php
            // get all the categories from the database
            $cats = get_terms(array('taxonomy'=>'category', 'name__like' => 'issue-release'));

            // loop through the categries
            foreach ($cats as $cat) {
                // setup the cateogory ID
                $cat_id= $cat->term_id;
                // create a custom wordpress query
                query_posts("cat=$cat_id&posts_per_page=100");
                // start the wordpress loop!
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="row" style="margin-bottom: 5%; margin-top: 5%;">
                        <div class="row">
                            <div class="col-4 adjust">
                                <?php $image = get_field('thumbnail'); ?>
                                <img class="cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%;"/>
                            </div>
                            <div class="col-4 adjust" >
                                <?php // create our link now that the post is setup ?>
                                <h5 class="textoeditions"><?php the_title(); ?></h5>
                                <?php $description = get_field('small_description');
                                echo "<p class='textoeditions'> $description </p>"?>
                                <a class="textoeditions" href="<?php the_permalink();?>" >View More</a>
                            </div>
                            <div class="col-4 adjust">
                                <?php $image = get_field('gif_3'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%;"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <?php $image = get_field('gif_1'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%;"/>
                            </div>
                            <div class="col-6">
                                <?php $image = get_field('gif_2'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%;"/>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ( more_posts() != 0 ) {
                        echo '<hr class="black-row">';
                    }
                    ?>

                <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            <?php } // done the foreach statement ?>

        </main><!-- #main -->
    </div><!-- #primary -->


    <?php get_footer(); ?>
