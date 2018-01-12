<?php
/**
 * Template Name: Page Layout
 */

get_header(); ?>

<body <?php body_class(); ?>>

<div class="scrollbar" id="style-3">
    <div class="force-overflow">


    <div class="row">

    <div class="col-2">

        <?php get_sidebar(); ?>

    </div>


    <div class="col-10">

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php woocommerce_content(); ?>

        </main><!-- #main -->
    </div><!-- #primary -->


    <?php get_footer(); ?>
