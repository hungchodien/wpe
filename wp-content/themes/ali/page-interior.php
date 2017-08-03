<?php  get_header(); ?>




    <div class="container w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL pd0i ">
        <div class="row pd0i mg0i">
            <div class="col-xs-12 col-md-8 pd0i mg0i w845iPC w100p ">
                <div class="pdR15iPC">
                    <div class="interior">
                        <?php
                        $args = array(
                            'post_type' => 'interior',
                            'posts_per_page' => '8',
                        );

                        $loop = new WP_Query($args) ;
                        $key = 0;
                        while($loop->have_posts()){
                            $loop->the_post();
                            echo ($key%2 == 0 ? "<div class ='interior-group clear pdT20 ' >": "");
                            global  $hung;
                            $thumbnail = get_the_post_thumbnail_url(); $hung = $thumbnail;
                            ?>
                            <div class="<?php echo ($key%2==0?'chan1':'le1'); ?> bgImgNoRepeat bgImgCover w48p thumbnail"
                                 style="background-image: url('<?php echo $thumbnail?>');"
                                  data-image-id="" data-toggle="modal" data-url = "<?php echo $thumbnail?>"
                                  data-target=".image-gallery<?php echo $key; ?>"
                            > </div>
                            <div class="modal fade image-gallery<?php echo $key; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <img id="image-gallery-image" class="img-responsive" src="<?php echo $thumbnail?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo ($key%2 == 0 ? "": "</div>");
                            $key++;
                        }
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
<style>
    .modal-header{
        background-color: transparent!important;
    }
    .modal-content{
        border-radius: 0!important;
    }
    .modal-body{
        padding: 4px!important;
        border-radius: 0!important;
    }
    .modal-body button{
        position: absolute!important;
        background-color: white!important;
        right: 4px!important;
        top: -20px!important;
        opacity: 1;
    }
</style>
    <div class="mgB50PC mgB0SMB mgB0LMB mgB0STL mgB0LTL">&nbsp;</div>
<?php get_footer(); ?>