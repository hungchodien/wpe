<?php  get_header(); ?>
    <div class="container pdT20 pdT0SMB">
        <div class="row pdT40p pdT0SMB">
            <div class="col-xs-12 col-md-8 pd0 mg0 pd5pSMB w830PC ">
                <?php $loop = new WP_Query('post_type=stylee');
                $posts = $loop->posts;
                foreach($posts as $post) {
                    ?>
                    <div class="post-type-image">
                        <a href="#" class="inlBlock w270 fl w90pSMB pd5pSMB">
                            <figure  class="w270 h270 overHidden w100pSMB">
                                <img class="w100p hAuto mg0Auto" src="<?php the_post_thumbnail_url();?>" alt="" />
                            </figure>
                        </a>
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="col-xs-12 col-md-4 pd0 mg0 w320PC" role="complementary">
                <div class="widget-area pd0 mg0">
                    <?php get_template_part( 'sidebar' ); ?>
                </div><!-- .widget-area -->
            </div><!-- #secondary -->
        </div>
    </div>
<?php get_footer(); ?>