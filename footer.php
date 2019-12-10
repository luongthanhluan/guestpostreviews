<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Guest_Post_Reviews
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
            <?php echo do_shortcode('[elementor-template id="205"]');?>
		
	</footer><!-- #colophon -->
        <div class="site-info">
			<?php echo comicpress_copyright(); ?> <a href="<?php echo esc_url( __( 'https://guestpostreviews.com/', 'guest-post-reviews' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'guest-post-reviews' ), 'Guest Post Reviews' );
				?>
			</a>
		
		</div><!-- .site-info -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
