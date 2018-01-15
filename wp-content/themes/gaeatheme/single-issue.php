<?php
/**
 * Template Name: Issue Template
 * Template Post Type: post, page, product
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

        <br>
        <br>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'title' );

            endwhile; // End of the loop.
            ?>

            <div class="row">
                <div class="img" style="width:100%; padding:5%;">
                    <?php $image = get_field('gif_1'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%"/>
                </div>
            </div>

            <div class="row">
                <div class="img" style="width:100%; padding:5%;">
                    <?php $image = get_field('gif_2'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%"/>
                </div>
            </div>

            <div class="row">
                <div class="img col-6" style="width:100%; padding:5%;">
                    <?php $image = get_field('gif_3'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width:100%"/>
                </div>
                <div class="text col-6"" style="width:100%; padding:5%;">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'description' );

                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->


    <?php get_footer(); ?>
