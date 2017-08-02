<?php get_header(); ?>


<?php if ( dynamic_sidebar('example_widget_area_name') ) : else : endif; ?>

<div id="primary" class="content_body clear">


<?php include_once ("slider-index.php");?>
    <!--close slider -->

    <div class="container w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL pd0i" > <!--1180-->
        <div class="row pd0i mg0i">
            <div class="col-xs-12 col-md-8 pd0i mg0i w845iPC w100p "> <!--830-->
                <div class="pdR15iPC">
                    <?php include_once ('content-left-index.php');?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 pd0i mg0i w320iPC w100p" role="complementary">
                <div class="pdL15iPC">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>
    </div><!--end container-->


    <div class="container w1180PC " style="display: none">
        <div class="clear">
            <div class="w830PC fl pdT4 pdB4 mgT20 mgB20 ">
                <?php
                $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) );
                while ( $loop->have_posts() ) : $loop->the_post();  ?>
                    <div style="background-color: #00a0d2"><?php the_tags();?> </div>
                    <div class="clear pdT4"> <!--news_loop_block mgT4p clear pd4p-->
                        <article id="post-<?php the_ID(); ?>" >
                            <div class="fl w150 h150"> <!--loop_news_thumbnail col-xs-4-->
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('loop_thumb'); ?></a>
                            </div>

                            <div class="fr w670PC"> <!--col-xs-8-->
                                <div class="clear">
                                    <div>
                                        <h4 class="loop_news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    </div>
                                    <div>
                                        <p class="date"><?php echo get_the_date('d/m/Y'); ?></p>
                                    </div>
                                    <div class="loop_news_excerpt"><?php the_excerpt(); the_meta();?></div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <hr class="mobile">
                <?php endwhile; ?>
                <div class="post-type-test w830PC clear pdT4 mgT20">
                    <?php
                    $args = array( 'post_type' => 'stylee', 'posts_per_page' => 3 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();

                        echo '<div class="loop_news_thumbnail-behigh">';
                        echo '<a href="<?php the_permalink(); ?>">'.the_post_thumbnail('thumbnail').'</a>';
                        echo '</div>';
                    endwhile;
                    ?>
                </div>
            </div>
            <div id="secondary" class="sidebar-container w320 fr psRelative" role="complementary">
                <div class="widget-area">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>

    </div><!--end container-->

    <div class="container w1180PC " style="display: none">
        <div class="clear">
            <div class="w830PC fl pdT4 pdB4 mgT20 mgB20 ">
                <?php
                $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) );
                while ( $loop->have_posts() ) : $loop->the_post();  ?>
                    <div style="background-color: #00a0d2"><?php the_category( ', ' ); ?></div>
                    <div class="clear pdT4"> <!--news_loop_block mgT4p clear pd4p-->
                        <article id="post-<?php the_ID(); ?>" >
                            <div class="fl w150 h150"> <!--loop_news_thumbnail col-xs-4-->
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('loop_thumb'); ?></a>
                            </div>

                            <div class="fr w670PC"> <!--col-xs-8-->
                                <div class="clear">
                                    <div>
                                        <h4 class="loop_news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    </div>
                                    <div>
                                        <p class="date"><?php echo get_the_date('d/m/Y'); ?></p>
                                    </div>
                                    <div class="loop_news_excerpt"><?php the_excerpt(); ?></div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <hr class="mobile">
                <?php endwhile; ?>
                <div class="post-type-test w830PC clear pdT4 mgT20">

                    <?php

                    $args = array( 'post_type' => 'stylee', 'posts_per_page' => 3 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        echo '<a href="'.get_post_permalink().'">';
                        echo '<div class="loop_news_thumbnail-behigh">';
                        echo '<a href="'.get_post_permalink().'">'.the_post_thumbnail('thumbnail').'</a>';
                        echo '</div>';
                        echo "</a>";
                    endwhile;

                    ?>

                </div>
            </div>
            <div id="secondary" class="sidebar-container w320 fr" role="complementary">
                <div class="widget-area">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>

    </div><!--end container-->



<?php get_footer(); ?>

