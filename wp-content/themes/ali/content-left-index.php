

<div class="w100p w96piSMB mg0AutoiSMB">
    <h1 style="color: black; font-weight: 900">NEWS</h1>
    <?php
    $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="row pdT20 pdT0SMB pd0i mg0iLR mgT40LTL mgT40STL mgT40LMB"> <!--news_loop_block mgT4p clear pd4p-->
            <div id="post" class="pdT20PC pdT20LTL pdT20STL pdT0LMT " >
                <div class="col-xs-4 pd0i mg0i w75iSMB h75iSMB w150LMB h150LMB w150STL h150STL w150LTL h150LTL w250PC h250PC overHiddeni">
                    <figure class="w75iSMB h75iSMB w150LMB h150LMB w150STL h150STL w150LTL h150LTL w250PC h250PC overHiddeni ">
                        <img class=" w75iSMB w150LMB w150STL w150LTL w250PC hAuto "  src="<?php the_post_thumbnail_url('loop_thumb');?>" alt="">
                    </figure>
                </div>
                <span class="col-xs-8 pdTB10 pdLR0i mgT-40STL mgT-40LTL mgT-20iSMB mgT-20iLMB ws85SMB">
                    <div class=" inlineBlocki fr displayNonePC pdL20SMB pdR20LTL"> <!--col-xs-8 670-->
                        <div class="">
                            <div>
                                <div class="h4"><a href="#"><?php the_title(); ?>
                                        </a></div>
                            </div>
                            <div>
                                <p class="date"><?php echo get_the_date('F j, Y '); ?></p>
                            </div>
                            <div class="except displayNoneSMB "><?php the_excerpt(); ?></div>
                        </div>
                    </div>

                </span>

            </div>
        </div>
    <?php endwhile; ?>
</div>
<div>
    <h1 style="color: black; font-weight: 900 ; padding-top: 20px;">STYLE</h1>
    <div class="post-type-style row" style="display: table; width: 100% ; padding: 20px 0; margin: 0 auto!important;">

        <?php
        $args = array( 'post_type' => 'stylee', 'posts_per_page' => 3 );
        $loop = new WP_Query( $args );
        $key = 0;
        while ( $loop->have_posts() ) : $loop->the_post();?>
            <div class="" style="display: table-cell">
                <a class="w100p"   href="<?php the_permalink();?>">
                    <figure class="w100p  <?php echo ($key==0?"l_style":($key==1?"c_style":"r_style"));?>">
                        <img class="w100p hAuto" src="<?php the_post_thumbnail_url('thumbnail');?>">
                    </figure>
                </a>
            </div>
            <?php $key++; endwhile; ?>
    </div>
</div>

