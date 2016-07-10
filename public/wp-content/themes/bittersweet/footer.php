<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage New Theme
 * @since New Theme v1.0
 */
?>

	</div><!-- .container -->

	<footer id="footer" class="site-footer" role="contentinfo">

		<div class="wrapper footer-border">

			<div class="business-info">
				<p>Bittersweet<br />
				16 E. Martin Street,<br />
				Raleigh, NC 27601<br />
				(919) 977-3829</p>
			</div>
			
			<div class="social-menu">
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<p>Follow Us</p>
					<nav id="social" class="social" role="navigation">
						<?php
							// Social links navigation menu.
							wp_nav_menu( array(
								'theme_location' => 'social',
								'depth'          => 1
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>
				</div>
			

			<div class="site-info">
				<p class="small">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
			</div><!-- .site-info -->
			
		</div>

	</footer><!-- .site-footer -->


</div><!-- .site -->
<?php wp_footer(); ?>

</body>
</html>
