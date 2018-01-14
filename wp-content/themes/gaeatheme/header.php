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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Recuando aos primórdios da humanidade, qualquer invenção humana era inspirada puramente em função da natureza. À medida que o homem foi evoluindo nesse sentido, as construções anteriores passaram a fazer parte da sua própria inspiração. A natureza deixou de ser a única fonte de conhecimento porque o ambiente à sua volta deixou de ser unicamente natureza. Este conhecimento foi- se alterando e moldando às suas próprias criações. Tendo isto em conta, a superfície do planeta terra é a maior obra coletiva da humanidade. A terra tal como a conhecemos na atualidade é um conjunto de intervenções humanas. Esta revista tem por objetivo analisar a forma como o homem contribuiu para as mudanças na superfície terrestre e a forma como estas mudanças intervieram em diferentes disciplinas inerentes ao homem, como o design e a tecnologia.">

    <link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_directory'); ?>/icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/isotype.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/shop.css">


    <link href="<?php echo get_bloginfo('template_directory'); ?>/plugs/bootstrap/css/bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/plugs/font-awesome/css/font-awesome.min.css"
          rel="stylesheet" type="text/css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/plugs/jquery/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/plugs/popper/popper.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/plugs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">About</h5>
                <?php
                $my_id = 22;
                $post_id_22 = get_post($my_id);
                $content = $post_id_22->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]>', $content);
                echo $content;
                ?>
            </div>
        </div>
    </div>
</div>