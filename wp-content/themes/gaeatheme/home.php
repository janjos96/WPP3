<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

    <div class="scrollbar" id="style-3">
        <div class="force-overflow">


            <div class="row">


                <div class="col-2">

                    <?php get_sidebar(); ?>

                </div>


                <div class="col-10">


                    <!---------------------------------- MAIN NAVBAR ---------------------------------------->


                    <nav id="mainnav">

                        <ul>
                            <li class="page_item"><span data-toggle="modal" data-target="#myModal" >about</span></li>
                            <?php wp_list_pages( '&title_li=&exclude=2,52,53,54,22' ); ?>
                        </ul>

                    </nav>


                    <!--------------------------------------------------------------------------------------->

                    <div data-relative-input="true" id="scene">
                        <!-- <div><img id="imagemain" src="img/paralaxlayers/0.1-1.1.png"></div>-->
                        <div data-depth="0.3"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/7.png"></div>
                        <div data-depth="0.2"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/6.png"></div>
                        <div data-depth="0.3"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/5.png"></div>
                        <div data-depth="0.6"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/4.png"></div>
                        <div data-depth="0"><img class="imagemain" id="logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/1.1.png"></div>
                        <div data-depth="0.8"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/3.png"></div>
                        <div data-depth="0.7"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/2.png"></div>
                        <div data-depth="0.2"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/12.png"></div>
                        <div data-depth="0.8"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/11.png"></div>
                        <div data-depth="0.6"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/10.png"></div>
                        <div data-depth="0.4"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/9.png"></div>
                        <div data-depth="0.2"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/8.png"></div>

                        <!-- <div data-depth="0.6"><img class="imagemain" src="img/paralaxlayers/14.png"></div>
                         <div data-depth="0.2"><img class="imagemain" src="img/paralaxlayers/13.png"></div>-->




                    </div>
                    <!-------------------------------------------------------------------------------------->

                    <div data-relative-input="true" id="responsiveimagemain">
                        <div data-depth="0.0"><img class="respimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/logo_resp.png"></div>
                        <div data-depth="0.8"><img class="respimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/1_resp.png"></div>
                        <div data-depth="0.7"><img class="respimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/2_resp.png"></div>
                        <div data-depth="0.6"><img class="respimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/3_resp.png"></div>
                        <div data-depth="0.5"><img class="respimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/4_resp.png"></div>
                        <div data-depth="0.4"><img class="respimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/5_resp.png"></div>
                    </div>
                    <!-------------------------------------------------------------------------------------->

                    <section id="latestarticles" >

                        <h1 class="index_sections">LATEST ARTICLES</h1>

                        <div class="grid">

                            <div class="grid-item grid-item--width2 a1">

                                <div class="index_titles">Apocalipse Juggernaut, Hello!<br><br>
                                    <div class="viewmore">
                                        I tend to view the whole disaster as an opportunity to try stuff.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article.php" >View More</a>
                                    </div>
                                </div>
                            </div>



                            <div class="grid-item grid-item--height2 a2">
                                <div class="index_titles"><br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--width2 grid-item--height2 a3">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--width2 grid-item--height2 a4">
                                <div class="index_titles">Man's Role in Changing the Face of the Earth<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>



                            <div class="grid-item grid-item--width2 grid-item--height2 a5">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--width2 a6">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>


                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="grid-item grid-item--width2 a7">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--height2 a8">
                                <div class="index_titles">Second Genesis<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--width2 a9">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--width2 a10">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--height2 a11">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--width2 grid-item--height2 a12">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--height2 a13">
                                <div class="index_titles">Man's Role in Changing the Face of the Earth<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--width2 a14">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid-item grid-item--height2 a15">
                                <div class="index_titles">Patterns in Nature<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="<?php echo get_bloginfo('template_directory'); ?>/article2.php" >View More</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </section>

                    <br><br><br><br><br>
                    <section class="latesteditions">
                        <h1 class="index_sections">EDITIONS</h1>

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

                                <div class="edsize" style="margin-bottom: 5%">
                                    <a href="<?php the_permalink();?>">
                                    <?php $image = get_field('thumbnail'); ?>
                                    <img class="editionsphoto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <br>
                                    <br>
                                    <a class="editions_item" href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                    </a>
                                </div>

                            <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                        <?php } // done the foreach statement ?>

                    </section>

<?php get_footer(); ?>

                    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/hidescrollmain.js"></script>
