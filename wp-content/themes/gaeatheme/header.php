<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gaeatheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GAEA</title>
    <meta name="description" content="">

    <link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory'); ?>/icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/isotype.css">
    <link rel="stylesheet" type="<?php echo get_bloginfo('template_directory'); ?>/text/css" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <link href="<?php echo get_bloginfo('template_directory'); ?>/plugs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/plugs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/plugs/jquery/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/plugs/popper/popper.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/plugs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

	<?php wp_head(); ?>
</head>
