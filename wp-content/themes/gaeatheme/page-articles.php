<?php
/**
 * Template Name: Articles Layout
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

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

            <?php
            // an associative array containing the query var and its value
            $paramslist = array('display' => 'list');
            $paramsbox = array('display' => 'box');
            ?>


            <a class="articles_item" href="<?php echo add_query_arg($paramslist); ?>">list</a>/<a class="articles_item" href="<?php echo add_query_arg($paramsbox); ?>">box</a>

            <?php
            // get all the categories from the database
            $cats = get_terms( 'category', array( 'name__like' => 'issue '));

            $display =  get_query_var('display');

            if(!$display) {
                // loop through the categries
                foreach ($cats as $cat) {
                    // setup the cateogory ID
                    $cat_id = $cat->term_id;
                    // Make a header for the cateogry
                    echo "<h2>" . $cat->name . "</h2>";
                    // create a custom wordpress query
                    query_posts("cat=$cat_id&posts_per_page=100&meta_key=index&orderby=meta_value_num&order=ASC");
                    // start the wordpress loop!
                    if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php // create our link now that the post is setup ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php echo '<hr/>'; ?>

                    <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                <?php }
            }// done the foreach statement

            if($display == 'list') {
                // loop through the categries
                foreach ($cats as $cat) {
                    // setup the cateogory ID
                    $cat_id = $cat->term_id;
                    // Make a header for the cateogry
                    echo "<h4 style='float: right'>" . $cat->name . "</h4>";
                    echo '<hr style="background-color:black; height:3px">';
                    // create a custom wordpress query
                    query_posts("cat=$cat_id&posts_per_page=100&meta_key=index&orderby=meta_value_num&order=ASC");
                    // start the wordpress loop!
                    if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php // create our link now that the post is setup ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php echo '<hr/>'; ?>

                    <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                <?php }
            }// done the foreach statement

            if($display == 'box') {
                // loop through the categries
                foreach ($cats as $cat) {
                    // setup the cateogory ID
                    $cat_id = $cat->term_id;
                    // Make a header for the cateogry
                    echo "<h2>" . $cat->name . "</h2>";
                    // create a custom wordpress query
                    query_posts("cat=$cat_id&posts_per_page=100&meta_key=index&orderby=meta_value_num&order=ASC");
                    // start the wordpress loop!
                    if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php // create our link now that the post is setup ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php echo '<hr/>'; ?>

                    <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                <?php }
            }// done the foreach statement
            ?>



        </main><!-- #main -->
    </div><!-- #primary -->


    <?php get_footer(); ?>
