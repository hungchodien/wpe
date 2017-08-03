<?php
/*
  * Template name: Page Stylee
 */
get_header();

?>
    <div class="container w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL pd0i ">
        <div class="row pd0i mg0i">
            <div class="col-xs-12 col-md-8 pd0i mg0i w845iPC w100p ">
                <div class="pdR15iPC">
                    <h2>Women</h2>
                    <div class="stylee interior-group">
                        <?php
                        $args = array(
                            'post_type' => 'stylee1',
                            'posts_per_page' => '30',
                            'meta_key' => 'gt',
                            'meta_value' => '2'
                        );
                        $loop = new WP_Query($args) ;
                        $key = 0;
                        while($loop->have_posts()){
                            $loop->the_post();
                            echo ($key%3 == 0 ? "<div class=\"stylee-group\">": "");
                            ?>
                            <div class="w32p stylee<?php echo $key%3; ?> bgImgNoRepeat bgImgCover thumbnail"
                                 style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')"></div>
                            <?php
                            echo ($key%3 == 2 ? "</div>": "");
                            $key++;
                        }
                        $count = $loop->post_count - 1;

                        if($count%3 != 2 )
                            echo "</div>";
                        ?>
                    </div>
                    <h2>Man</h2>
                    <div class="stylee interior-group">
                        <?php
                        $args = array(
                            'post_type' => 'stylee1',
                            'posts_per_page' => '30',
                            'meta_key' => 'gt',
                            'meta_value' => '1'
                        );
                        $loop = new WP_Query($args) ;
                        $key = 0;
                        while($loop->have_posts()){
                            $loop->the_post();
                            echo ($key%3 == 0 ? "<div class=\"stylee-group\">": "");
                            ?>
                            <div class="w32p stylee<?php echo $key%3; ?> bgImgNoRepeat bgImgCover thumbnail"
                                 style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')"></div>
                            <?php
                            echo ($key%3 == 2 ? "</div>": "");
                            $key++;
                        }
                        $count = $loop->post_count - 1;

                        if($count%3 != 2 )
                            echo "</div>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 pd0i mg0i w320iPC w335iPC w100p" role="complementary">
                <div class="pdL15iPC0">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>
    </div>

    <div class="mgB50PC mgB0SMB mgB0LMB mgB0STL mgB0LTL">&nbsp;</div>
<?php get_footer(); ?>