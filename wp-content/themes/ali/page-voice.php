<?php  get_header(); ?>
<div id="primary" class="content_body">
   <div class="container clear">
   <div class="row">
        <div class="cBlack">
            <?php
                $loop = new WP_Query('post_type=voice');
                if($loop->have_posts()){
                    while ($loop->have_posts()){
                        $loop->the_post();
                        ?>
                        <style>
                            @media screen and (max-width: 499px) {  }
                            @media screen and (max-width: 767px) {  }
                            @media screen and (max-width: 990px) {  }
                            @media screen and (max-width: 1199px) {  }
                            @media screen and (min-width: 1200px) {   }
                        </style>
                            <div class="voice" style="border: 1px solid #9ea476; padding: 2px 0; margin: 2px 0">
                                <?php the_title(); ?>
                                <div>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>

       <?php echo do_shortcode('[contact-form-7 id="380" title="Contact form 1"]'); ?>
<!--       <div class="form " >-->
<!--           <form action="../controller/saveVoice.php" method="post">-->
<!--               <div class="form-group">-->
<!--                   <label >お名前</label>-->
<!--                   <input type="text" class="form-control" id="name1" placeholder="enter name 1">-->
<!--               </div>-->
<!--               <div class="form-group">-->
<!--                   <label >かな</label>-->
<!--                   <input type="text" class="form-control" id="name2" placeholder="enter name 2">-->
<!--               </div>-->
<!--               <div class="form-group">-->
<!--                   <label >携帯電話</label>-->
<!--                   <input type="text" class="form-control" id="tel1" placeholder="tel 1 ">-->
<!--               </div>-->
<!--               <div class="form-group">-->
<!--                   <label >SNS ID</label>-->
<!--                   <input type="text" class="form-control" id="sns" placeholder="sns">-->
<!--               </div>-->
<!--               <div class="form-group">-->
<!--                   <label >e-Mailアドレス*</label>-->
<!--                   <input type="email" class="form-control" id="" placeholder="email ">-->
<!--               </div>-->
<!--               <div class="form-group">-->
<!--                   <label>お問合せ内容*</label>-->
<!--                   <textarea class="form-control" id="mesage" rows="3"></textarea>-->
<!--               </div>-->
<!---->
<!--               <button type="submit" class="btn btn-primary">Submit</button>-->
<!--           </form>-->
<!--       </div>-->
       <?php echo actionForm();?>
   </div>
   </div><!--.content_inc-->
</div><!--#primary-->
<?php get_footer(); ?>