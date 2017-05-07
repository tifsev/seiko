<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seiko
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer">
			<div class="footer-top">
				<div class="footer-social-container">
                	<div class="footer-social">social media goes here</div>
				</div>
				<div class="footer-subscribe"><div class="half-ib">subscribe button?</div></div>
			</div>
			<div class="footer-bottom">
				<div class="footer-links-container">footer links?</div>
				<div class="site-info">
					<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'seiko' ) ); ?>"><?php //printf( esc_html__( 'Proudly powered by %s', 'seiko' ), 'WordPress' ); ?></a>
					<span class="sep">  </span>
					<?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'seiko' ), 'seiko', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
				</div><!-- .site-info -->
			</div>

		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
