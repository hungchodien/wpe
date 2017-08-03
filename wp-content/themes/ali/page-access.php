<?php  get_header(); ?>

    <div class="container w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL pd0i ">
        <div class="row pd0i mg0i">
            <div class="col-xs-12 col-md-8 pd0i mg0i w845iPC w100p ">
                <div class="pdR15iPC">
                    <div class="access" style="display: table; width: 100%;">

                        <table>
                            <?php
                            $args = array(
                                'post_type' => 'access',
                                'posts_per_page' => '8',
                            );

                            $loop = new WP_Query($args) ;
                            while($loop->have_posts()){
                                $loop->the_post();
                                ?>
                                <tr>
                                    <td class = "bgdddd" style="width: 32%!important;">電話番号</td>
                                    <td><?php echo get_post_meta(get_the_ID(), 'tel', true); ?></td>
                                </tr>
                                <tr>
                                    <td class = "bgdddd">住所</td>
                                    <td><?php echo get_post_meta($post->ID, 'access_text', true); ?>
                                    <br>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class = "bgdddd">アクセス</td>
                                    <td><?php echo get_post_meta($post->ID, 'address', true); ?></td>
                                </tr>

                                <tr>
                                    <td class = "bgdddd">営業時間</td>
                                    <td><?php echo get_post_meta($post->ID, 'business_hours', true); ?></td>
                                </tr>
                                <tr>
                                    <td class = "bgdddd">席数</td>
                                    <td><?php echo get_post_meta($post->ID, 'credit_card', true); ?></td>
                                </tr>
                                <tr>
                                    <td class = "bgdddd">スタイリスト数</td>
                                    <td><?php echo get_post_meta($post->ID, 'Parking_Lot', true); ?></td>
                                </tr>

                                <tr>
                                    <td class = "bgdddd">クレジットカード</td>
                                    <td><?php echo get_post_meta($post->ID, 'Number_of_stylists', true); ?></td>
                                </tr>
                                <tr>
                                    <td class = "bgdddd">駐車場</td>
                                    <td><?php echo get_post_meta($post->ID, 'Number_of_seats', true); ?></td>
                                </tr>
                                <tr>
                                    <td class = "bgdddd">こだわり条件</td>
                                    <td><?php echo get_post_meta($post->ID, 'Attention_condition', true); ?></td>
                                </tr>
                            <?php } ?>

                        </table>
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
<style>
    .access table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .access td,.access th {
        border: 1px solid #aaa;
        text-align: left;
        padding: 8px;
    }

    .access .bgdddd{
        background-color: #dddddd;
    }
</style>
<?php get_footer(); ?>