<?php
/**
 * The template for displaying search results pages.
 *
 * @package Adagio-Foundation-Starter
 */

get_header(); ?>

<div class="row">
	<div class="small-12 large-8 columns" role="main">

		<h2><?php _e( 'Search Results for', 'adagio-foundation-starter' ); ?> "<?php echo get_search_query(); ?>"</h2>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif;?>

	<?php if ( function_exists( 'adagio_foundation_starter_pagination' ) ) { adagio_foundation_starter_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'adagio-foundation-starter' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'adagio-foundation-starter' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer();
