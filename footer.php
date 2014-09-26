<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kitchen
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<section class="footersection">
		<div class="grid">
			<div class="unit one-fifth">
				<h3>Hours of Operation</h3>
			</div>
			<div class="unit one-fifth">
				<h3>Our Location</h3>
			</div>
		<div class="unit one-fifth">
		<h3>Stay in Touch</h3>
		</div>
		</div>
		</section>
		


		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'kitchen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'kitchen' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'kitchen' ), 'kitchen', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
