<?php
/**
 * Posts index
 *
 * @package Adagio-Foundation-Starter
 */
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebars" role="main">

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<?php adagio_foundation_starter_breadcrumb( true, true ); ?>
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'adagio-foundation-starter' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php comments_template(); ?>
	</article>
<?php endwhile;?>

<?php get_sidebar( 'left' ); ?>
<?php get_sidebar( 'right' ); ?>

</div>

<?php get_footer();
