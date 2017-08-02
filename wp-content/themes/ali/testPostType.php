<style>


</style>
<div style="background-color: #449d44">

    <h1>load post type</h1>
    <div class = "">
        <div>
            <?php
                $args = array( 'post_type' => 'nguoidung', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
                    <a href="path-to-the-image">
                        <figure>
                            <img width="150" height="150" src="<?php the_post_thumbnail_url(); ?>" />
                            <figcaption><?php the_title(); echo "<br>";
                                $args = array(
                                    'post_type' => 'nguoidung',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'nguoidungTag',
                                            'field'    => 'slug',
                                            'terms'    => 'bob',
                                        ),
                                    ),
                                );
                                $query = new WP_Query( $args );
                                print_r($query);
                                $query = the_terms(the_ID(), 'nguoidungTag');
                                var_dump($query);
                                 ?>
                            </figcaption>
                        </figure>
                    </a>
                <?php endwhile; ?>
        </div>

    </div>
</div>