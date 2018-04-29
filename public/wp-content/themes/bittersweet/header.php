<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage New Theme
 * @since New Theme v1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php get_template_part( 'header' , 'meta' ); ?>
	<?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link visuallyhidden" href="#content"><?php _e( 'Skip to content' ); ?></a>
	<?php if ( function_exists( 'ot_get_option' ) ) {
				$top_banner_content = ot_get_option( 'top_banner_content' );} ?>
	
	<?php if($top_banner_content) :?>
		<div class="alert">
			<div class="wrapper">
				<div class="alert-content">
					<p><?php echo $top_banner_content; ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<div class="site-branding">
				<?php 
				// Site Settings
			    $theme_dir 	= get_template_directory();
			    $images_dir = $theme_dir . '/img/';?>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						</a>
				
			</div>
			<div class="small-menu" style="display: none;"></div>
			<a href="#menu" class="menu-toggle">Menu</a>
			<div class="large-menu">
				<?php if ( has_nav_menu('primary') ): ?>
					<nav class="primary">
						<h2 class="visuallyhidden">Primary Navigation</h2>
						<?php wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false
						)); ?>
					</nav>
				<?php endif; ?>
			</div>	
		</div>
	</header>

	<div id="content" class="container">
