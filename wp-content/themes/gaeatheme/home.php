<?php get_header(); ?>

    <body <?php body_class(); ?>>

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

                            <?php wp_list_pages('&title_li=&exclude=2'); ?>
                            <li class="page_item social"><a><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
                            <li class="page_item social"><a><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                            </li>

                        </ul>

                    </nav>


                    <!--------------------------------------------------------------------------------------->

                    <div data-relative-input="true" id="scene">
                        <!-- <div><img id="imagemain" src="img/paralaxlayers/0.1-1.1.png"></div>-->
                        <div data-depth="0.3"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/7.png">
                        </div>
                        <div data-depth="0.2"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/6.png">
                        </div>
                        <div data-depth="0.3"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/5.png">
                        </div>
                        <div data-depth="0.6"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/4.png">
                        </div>
                        <div data-depth="0"><img class="imagemain" id="logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/1.1.png">
                        </div>
                        <div data-depth="0.7"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/2.png">
                        </div>
                        <div data-depth="0.8"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/3.png">
                        </div>


                        <div data-depth="0.6"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/10.png">
                        </div>
                        <div data-depth="0.4"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/9.png">
                        </div>
                        <div data-depth="0.2"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/8.png">
                        </div>
                        <div data-depth="0.8"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/11.png">
                        </div>
                        <div data-depth="0.2"><img class="imagemain" src="<?php echo get_bloginfo('template_directory'); ?>/img/paralaxlayers/12.png">
                        </div>


                    </div>


                    <section id="latestarticles">

                        <h1>LATEST ARTICLES</h1>

                        <div class="grid">
                            <div class="grid-item grid-item--width2">

                                <div class="squarecontent">Apocalipse Juggernaut, Hello!<br><br>
                                    <div class="viewmore">
                                        I tend to view the whole disaster as an opportunity to try stuff.<br><br>
                                        <a href="article.php">View More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="grid-item grid-item--height2">
                                <div class="squarecontent">A year from Monday<br><br>
                                    <div class="viewmore">
                                        The question is: Is my thought changing? It is and it
                                        isn't.<br><br>

                                        <a href="article2.php">View More</a>
                                    </div>
                                </div>

                            </div>


                            <div class="grid-item grid-item--width2 grid-item--height2"><a class="viewmore" href="article3.php">Patterns in Nature</a></div>
                            <div class="grid-item grid-item--width2 grid-item--height2"><a class="viewmore">view more</a></div>
                            <div class="grid-item--width2 grid-item--height2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--width2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--width2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--height2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--width2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--width2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--height2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--width2 grid-item--height2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--height2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--width2"><a class="viewmore">view more</a></div>
                            <div class="grid-item grid-item--height2"><a class="viewmore">view more</a></div>

                        </div>


                    </section>

                    <section id="latesteditions">
                        <h1>EDITIONS</h1>


                        <div class="edsize">
                            <img class="editionsphoto"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/img/editions/issue1.jpg">
                            <figcaption>Issue 1</figcaption>
                            <br><br>
                        </div>

                        <div class="edsize">
                            <img class="editionsphoto"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/img/editions/issue1.jpg">
                            <figcaption>Issue 1</figcaption>
                            <br><br>
                        </div>

                        <div class="edsize">
                            <img class="editionsphoto"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/img/editions/issue1.jpg">
                            <figcaption>Issue 1</figcaption>
                            <br><br>
                        </div>

                        <div class="edsize">
                            <img class="editionsphoto"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/img/editions/issue1.jpg">
                            <figcaption>Issue 1</figcaption>
                            <br><br>
                        </div>

                        <div class="edsize">
                            <img class="editionsphoto"
                                 src="<?php echo get_bloginfo('template_directory'); ?>/img/editions/issue1.jpg">
                            <figcaption>Issue 1</figcaption>
                            <br><br>
                        </div>

                    </section>

<?php get_footer(); ?>
