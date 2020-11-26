<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitnessness
 */

?>

	<img src="<?php echo get_template_directory_uri(); ?>/img/fitness-footer.jpg" class="img-fluid mt-4" alt="Lorem Ipsum">
	<footer id="colophon" class="site-footerp-4 p-4 bg-light border-top text-center">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fitnessness' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fitnessness' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fitnessness' ), 'fitnessness', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
