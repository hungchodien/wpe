<?php get_header() ; ?>

<div class="content">
    <section id="main-content">
        <?php
        if( have_posts() ){
            while( have_posts() ):
                the_post();
                ?>
                <?php get_template_part('content', get_post_format()); ?>
                <!--            <h1> e c ho the _t it le() </h1>-->
                <?php
            endwhile;
            wpbeginner_numeric_posts_nav();
        }
        else
            get_template_part('content', 'none');
        ?>
    </section>
    <section id="sidebar">
<!--         get_sidebar(); -->
    </section>
</div>


<?php get_footer(); ?>
