<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package Adagio-Foundation-Starter
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</footer>
		</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
