<?php

$cat_args = array(
    'orderby'       => 'term_id',
    'order'         => 'ASC',
    'hide_empty'    => true,
);

$terms = get_terms('nguoidungTaxonomies', $cat_args);

foreach($terms as $taxonomy){
    $term_slug = $taxonomy->slug;

    echo "<div style='background-color: rgb(240 , 240, 246)'>$taxonomy->name<span>$taxonomy->parent -- </span><span>$taxonomy->term_id</span></div>";

    $tax_post_args = array(
        'post_type' => 'nguoidung',
        'posts_per_page' => 999,
        'tax_query' => array(
            array(
                'taxonomy' => 'nguoidungTaxonomies',
                'field' => 'slug',
                'terms' => "$term_slug"
            )
        )
    );

    $tax_post_qry = new WP_Query($tax_post_args);

    if($tax_post_qry->have_posts()) :
        while($tax_post_qry->have_posts()) :
            $tax_post_qry->the_post();

            echo "<br>";
            ?>
            <div style="margin-left: 100px;">
                <?php the_title(); ?>
            </div>
            <?php
            echo "<br>";

        endwhile;

    else :
        echo "No posts";
    endif;
} //end foreach loop

?>
<div style="background-color: #9ea476">
<?php

$cat_args = array(
    'orderby'       => 'term_id',
    'order'         => 'ASC',
    'hide_empty'    => true,
);

$terms = get_terms('nguoidungTag', $cat_args);

foreach($terms as $taxonomy){
    $term_slug = $taxonomy->slug;

    echo "<div style='background-color: rgb(240 , 240, 246)'>$taxonomy->name<span>$taxonomy->parent -- </span><span>$taxonomy->term_id</span></div>";

    $tax_post_args = array(
        'post_type' => 'nguoidung',
        'posts_per_page' => 999,
        "tag" => "branding",
        'tax_query' => array(
            array(
                'taxonomy' => 'nguoidungTag',
                'field' => 'slug',
                'terms' => "$term_slug"
            )
        )
    );

    $tax_post_qry = new WP_Query($tax_post_args);

    if($tax_post_qry->have_posts()) :
        while($tax_post_qry->have_posts()) :
            $tax_post_qry->the_post();

            echo "<br>";
            ?>
            <div style="margin-left: 100px;">
                <?php the_title(); ?>
            </div>
            <?php
            echo "<br>";

        endwhile;

    else :
        echo "No posts";
    endif;
} //end foreach loop

?>
</div>
