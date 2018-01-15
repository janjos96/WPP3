<?php
/**
 * Template Name: Article Template
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
        <br>
        <br>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );


            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->


    <?php get_footer(); ?>
