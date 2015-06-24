<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>
<div class="row">
    <div class="small-12 large-8 large-push-4 columns" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
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


    </div>
    <?php get_sidebar( 'left' ); ?>
</div>
<?php get_footer(); ?>
