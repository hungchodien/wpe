


<?php  get_header(); ?>

<div class="container w1180iPC w100p pdLR0iPC pdTB20iPC pdLR0iLTL pdTB10iLTL pd0i ">
    <div class="row pd0i mg0i">
        <div class="col-xs-12 col-md-8 pd0i mg0i w845iPC w100p ">
            <div class="pdR15iPC">
                <div class="access" style="display: table; width: 100%;">
                    <div class="cBlack">
                        <div class="voice">
                            <?php
                            $loop = new WP_Query('post_type=voice');
                            if($loop->have_posts()){
                                $key = 0;
                                while ($loop->have_posts()){
                                    $loop->the_post();
                                    ?>

                                    <div class="voice-group" style="border: 1px solid #9ea476;">
                                        <h1 class="cBlack"><?php echo ($key<10? "VOICE.0$key" : "VOICE.$key"); ?></h1>
                                        <h2><?php the_title(); ?></h2>
                                        <div>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <?php
                                    $key ++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="voice-group" id="mesage_input_voice">
                        <h1 class="cBlack">YOUR VOICE</h1>
                        <h2>あなたの声（お問合せなどもこちらにお願いします）</h2>
                        <div>
                            <p>以下のフォームにご記入のうえ、「入力内容確認」ボタンを押してください。<br>
                                *は必須入力欄です。必ず記入してください。半角カナは使用しないで下さい。<br>
                                注：入力エラーになる場合には次のメールアドレスに直接お問い合わせください。</p>
                            <p style="color: red">
                                infor@tokio.com
                            </p>
                        </div>
                    </div>
                    <?php echo actionForm();?>
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
    #mesage_input_voice{
        padding-left: 0!important;
    }
</style>
<?php get_footer(); ?>
