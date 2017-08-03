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

                    <div class="recruit interior-group" id="recruit">
                        <?php
                        $args = array(
                            'post_type' => 'recruit',
                            'posts_per_page' => '1'
                        );
                        $loop = new WP_Query($args) ;
                        while($loop->have_posts()){
                            $loop->the_post();
                            ?>
                            <div class="bgImgNoRepeat bgImgCover thumbnail2"
                                 style="background-image: url('<?php echo the_post_thumbnail_url();?>');"
                            ><span class="cBlack groupt_text" ><?php echo the_excerpt(); ?></span></div>
                            <?php
                        }
                        ?>
                        <div class="" style="padding-top: 20px;">
                            <input class="cBlack bgWhite " style="margin: 2px" value="<?php echo get_post_meta($post->ID, 'any_time' , true ); ?>" type="button">
                            <input class="cBlack bgWhite " style="margin: 2px"  value="<?php echo get_post_meta($post->ID, 'Hair_stylist' , true ); ?>" type="button">
                            <input class="cBlack bgWhite " style="margin: 2px"  value="<?php echo get_post_meta($post->ID, 'staff' , true ); ?>" type="button">
                            <span style="margin: 2px; display: inline-block"><?php echo get_post_meta($post->ID, 'decription_btn_infor' , true ); ?> </span>
                        </div>
                    </div>
                    <div class="voice-group" style="padding-left: 0!important;">
                        <h1 class="cBlack">ENTRY</h1>
                        <div>
                            <p><?php echo get_post_meta($post->ID, 'ENTRY' , true) ;?></p>
                            <p style="color: red">
                                infor@tokio.com
                            </p>
                        </div>
                    </div>
                    <?php echo actionForm_cruit();?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 pd0i mg0i w320iPC w335iPC w100p" role="complementary">
                <div class="pdL15iPC0">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>
    </div>
<style>
    #recruit .thumbnail2 p{
        width: 100%;
    }
</style>
    <div class="mgB50PC mgB0SMB mgB0LMB mgB0STL mgB0LTL">&nbsp;</div>
<?php get_footer(); ?>