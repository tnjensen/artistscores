<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artistscores
 */

?>

	<footer id="colophon" class="site-footer row">
		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'artistscores' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				/* printf( esc_html__( 'Proudly powered by %s', 'artistscores' ), 'WordPress' ); */
				?>
			</a>
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				?>
				<a href="<?php echo esc_url( __('https://tnjensen.com', 'artistscores')); ?>"><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'artistscores' ), 'artistscores','Thomas N. Jensen' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
