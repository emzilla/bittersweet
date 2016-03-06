<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage New Theme
 * @since New Theme v1.0
 */
?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<?php  if ( function_exists( 'ot_get_option' ) ) {
        $feature_content = ot_get_option( 'feature_content' );
} ?>
<section class="hero">
	<div class="content-wrapper group">
		<div class="hero-content">
			<?php echo $feature_content; ?>
		</div>
	</div>
</section>


<?php  if ( function_exists( 'ot_get_option' ) ) {
        $hours_content 		= ot_get_option( 'hours_content' );
        $location_content   = ot_get_option( 'location_content' );
} ?>

<section class="homepage-content">
	<div class="content-wrapper">
		<div class="content-column">
			<h2>Hours</h2>
			<?php echo $hours_content; ?>
		</div>
		<div class="content-column">
			<h2>Location</h2>
			<?php echo $location_content; ?>
		</div>
	</div>
</section>

<section class="cta">
	<div class="cta-content">
		<a href="/menu" class="button cta-text">See our menu</a>
	</div>
</section>
	
<section class="instagram-feed" id="instafeed">
	<a href="https://www.instagram.com/bittersweetraleigh/" class="follow-us" target="_blank">Bittersweet on Instagram</a>
</section>

