<?php
/**
 * The template for displaying the footer.
 *
 * @package Sela
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>

		<div class="site-info"  role="contentinfo">
			<a href="/contact-us/">Contact Us</a>
			<span class="sep"> &nbsp;&nbsp;&middot;&nbsp;&nbsp; </span>
			e.forchange@gmail.com
			<span class="sep"> &nbsp;&nbsp;&middot;&nbsp;&nbsp; </span>
			BN: 809632607RR0001
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
