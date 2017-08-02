

<div style="border: 1px solid #999999">
    <?php
        $terms = get_terms( array(
            'taxonomy' => 'nguoidungTaxonomies',
            'hide_empty' => false,
        ) );
        foreach($terms as $key => $value){
            echo "<h1>".$value->name."</h1>";
            echo "<br>";
            // gets the ID from a custom field to show posts on a specific page
            $buildType = get_post_meta($post->ID, 'build_type_id', true);
            echo "<div style ='background-color: red'>".var_dump($buildType)."</div>";
            // run query
            query_posts(array(
                'post_type' => 'menu_name',
                'showposts' => -1,
                'tax_query' => array(
                    'taxonomy' => 'nguoidungTaxonomies',
                    'field' => 'term_id'
                ),
                'orderby' => 'title',
                'order' => 'ASC'
            ));
        }
    ?>
</div>