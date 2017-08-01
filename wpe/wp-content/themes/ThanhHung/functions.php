<?php
define("THEME_URL",get_stylesheet_directory() );
define("CORE_URL", THEME_URL."/core");
define("LANGUGES_URL", THEME_URL."/languges");

include_once (CORE_URL."/init.php");
if(isset($content_width))
    $content_width = 620;
if(!function_exists("thanhhung_theme_setup")){
    function thanhhung_theme_setup(){

        /*
         * thiết lập text domain
         */
        load_theme_textdomain('truongthanhhung',LANGUGES_URL);
        /*
         * tự động thêm link RSS lên <head>
         */
        add_theme_support('automatic_feed_links');
        /*
         * add img dai dieen cho post
         */
        add_theme_support('post-thumbnails');
        /*
         * tự thêm title
         */
        add_theme_support('title_tag');
        /*
        * Thêm chức năng post format
        */
        add_theme_support( 'post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );
        /*
        * Thêm chức năng custom background
        */
        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support( 'custom-background', $default_background );
        /*
        * Tạo menu cho theme
        */
        register_nav_menu ( 'primary-menu', __('Primary Menu', 'truongthanhhung') );
        /*
        * Tạo sidebar cho theme
        */
        $sidebar = array(
            'name' => __('Main Sidebar', 'truongthanhhung'),
            'id' => 'main-sidebar',
            'description' => 'đây là description sidebar menu',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar( $sidebar );
    }
    add_action('init', 'thanhhung_theme_setup');
}
/*
 * thêm hàm load logo cho web
 */
if(!function_exists('thanhhung_header_logo')){
    function thanhhung_header_logo(){
        ?>
        <div class="site-name">
            <?php
                $site_title = get_bloginfo( 'name' );
                $site_url = network_site_url( '/' );
                $site_description = get_bloginfo( 'description' );
                if( is_home() ){
                    echo "<h1><a href='$site_url' title='$site_description' >$site_title</a></h1>";
                }else {
                    echo "<p><a href='$site_url' title='$site_description' >$site_title</a></p>";
                }
            ?>
        </div>
        <div class="site-description"><?php bloginfo('descriotion'); ?></div>
        <?php
    }
}
if( !function_exists('thanhhung_wp_nav_menu') ){
    function thanhhung_wp_nav_menu($menu){
        $menu = array(
            'theme_location' => $menu, // tên location cần hiển thị
            'container' => 'nav', // thẻ container của menu
            'container_class' => $menu, //class của container
            'menu_class' => 'menu clearfix' // class của menu bên trong
        );
        wp_nav_menu($menu);
    }
}
if( !function_exists('thanhhung_pagination') ){
    function thanhhung_pagination(){
        /*
             * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
             */
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return '';
        }
        ?>

        <nav class="pagination" role="navigation">
        <?php if ( get_next_post_link() ) : ?>
            <div class="prev"><?php next_posts_link( __('Older Posts', 'thanhhung') ); ?></div>
        <?php endif; ?>

        <?php if ( get_previous_post_link() ) : ?>
            <div class="next"><?php previou_posts_link( __('Newer Posts', 'thanhhung') ); ?></div>
        <?php endif; ?>

        </nav><?php
    }
}
if(!function_exists('wpbeginner_numeric_posts_nav')){
    function wpbeginner_numeric_posts_nav() {

        if( is_singular() )
            return;

        global $wp_query;

        /** Stop execution if there's only 1 page */
        if( $wp_query->max_num_pages <= 1 )
            return;

        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );

        /**	Add current page to the array */
        if ( $paged >= 1 )
            $links[] = $paged;

        /**	Add the pages around the current page to the array */
        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }

        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }

        echo '<div class="navigation"><ul>' . "\n";

        /**	Previous Post Link */
        if ( get_previous_posts_link() )
            printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

        /**	Link to first page, plus ellipses if necessary */
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="active"' : '';

            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

            if ( ! in_array( 2, $links ) )
                echo '<li>…</li>';
        }

        /**	Link to current page, plus 2 pages in either direction if necessary */
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }

        /**	Link to last page, plus ellipses if necessary */
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li>…</li>' . "\n";

            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }

        /**	Next Post Link */
        if ( get_next_posts_link() )
            printf( '<li>%s</li>' . "\n", get_next_posts_link() );

        echo '</ul></div>' . "\n";

    }

}