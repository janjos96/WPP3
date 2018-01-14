<?php
/**
 * Template Name: Short-Post
 * Template Post Type: post, page, product
 *
 *
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gaeatheme
 */

get_header(); ?>


<div class="scrollbar" id="style-3">
    <div class="force-overflow">


    <div class="row">

    <div class="col-2">

        <?php get_sidebar(); ?>

    </div>


    <div class="col-10">

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="img">
                <?php $image = get_field('main_image'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?>