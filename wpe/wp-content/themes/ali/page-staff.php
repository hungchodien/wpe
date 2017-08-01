<?php  get_header(); ?>

    <div class="container w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL pd0i ">
        <div class="row pd0i mg0i">
            <div class="col-xs-12 col-md-8 pd0i mg0i w845iPC w100p ">
                <div class="pdR15iPC">
                    <iframe id="page-staff-get-width-set-height-video" class="w100p h410" src="https://www.youtube.com/embed/H4u7CY0FIvM" frameborder="0" allowfullscreen></iframe>
                    <div class="blocki" style="display: table; width: 100%;">
                        <?php $loop = new WP_Query("post_type=instagram") ;
                        $key = 0;
                        while($loop->have_posts()){
                            $loop->the_post();
                            ?>
                            <a id="page-staff-get-width-set-height<?php echo $key ?>" class="overHiddeni <?php echo ($key%2 == 0 ? "fl  fniSMB fniLMB fniSTL fniLTL" : "fr  fniSMB fniLMB fniSTL fniLTL"); ?> inlineBlocki w50p mg0Autoi "
                               style="border: 1px solid #cccc77" >
                                <figure class="w100p  overHiddeni " > <!--h410PC h320LTL h250iSTL h250iSTL h200iLMB h180iSMB-->
                                    <img class="w100p hAuto" src="<?php the_post_thumbnail_url();?>"/>
                                </figure>
                            </a>
                            <?php
                            $key++;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 pd0i mg0i w335iPC w100p" role="complementary">
                <div class="pdL15iPC0">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>
    </div>
<div class="mgB50PC mgB0SMB mgB0LMB mgB0STL mgB0LTL">&nbsp;</div>
<?php get_footer(); ?>