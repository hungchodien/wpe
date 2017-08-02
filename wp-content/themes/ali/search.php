<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content_body">
		<div class="site-content container search_page clear">
        <div class="row">
<div class="main_content col-sm-9 col-sm-push-3">
		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<h1 class="entry-title blue_bg cat_block_title"><?php printf( __( 'Kết quả tìm: %s', 'twentythirteen' ), get_search_query() ); ?></h1>
			</header>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php wp_pagenavi(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

 </div>
<?php get_sidebar(); ?>
</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>