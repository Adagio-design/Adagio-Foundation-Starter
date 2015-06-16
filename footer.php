<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>

</section>
<footer class="row">
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>