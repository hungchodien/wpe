<?php  get_header(); ?>
<style>
    .concept img{
        max-width: 100%;
        height: auto;
        width: 100%;
    }
</style>
    <div class="container w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL pd0i ">
        <div class="row pd0i mg0i">
            <div class="col-xs-12 col-md-8 pd0i mg0i w845iPC w100p ">
                <div class="pdR15iPC">
                    <div class="concept" style="display: table; width: 100%;">
                        <?php $loop = new WP_Query("post_type=page&name=concept") ;
                        while($loop->have_posts()){
                            $loop->the_post();
                            the_content();
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 pd0i mg0i w320iPC w100p" role="complementary">
                <div class="pdL15iPC0">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>
    </div>
    <div class="mgB50PC mgB0SMB mgB0LMB mgB0STL mgB0LTL">&nbsp;</div>
<?php get_footer(); ?>