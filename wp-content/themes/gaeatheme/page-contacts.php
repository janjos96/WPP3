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

                <br>
                <h3><b>Address:</b></h3>
                <?php $street = get_field('adress');
                echo "<p> $street </p>"?>
                <?php $zipcode = get_field('postal_code'); $city = get_field('city');
                echo "<p> $zipcode - $city</p> <br>"?>
                <h3><b>Phone:</b></h3>
                <?php $phone = get_field('phone');
                echo "<p>$phone</p> <br>"?>
                <h3><b>Email:</b></h3>
                <?php $email = get_field('email');
                echo "<p>$email</p> <br>"?>

                <h5>Or you can just use the form below to get to us immediately, we just like to read everything.</h5> <br>

                <div class="emailform">
                    <h3><b>Direct Message:</h3>
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
