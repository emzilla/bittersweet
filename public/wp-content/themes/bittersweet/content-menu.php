<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage New Theme
 * @since New Theme v1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( function_exists( 'ot_get_option' ) ) {
		$menu_page_pdf = ot_get_option( 'menu_page_pdf' );} ?>
	
	<div class="menu entry-content">
		<?php if($menu_page_pdf) :?>
			<div class="menu-category menu-pdf">
				<a href="<?php echo $menu_page_pdf; ?>" class="button cta-text">View Full Menu PDF</a>
			</div>
		<?php endif; ?>
		<div class="menu-row">
			<div class="menu-category cocktails">
				<a href="/menu/cocktails" class="button cta-text">Cocktails</a>
			</div>
		</div>
		<div class="menu-row">
			<div class="menu-category desserts">
				<a href="/menu/desserts" class="button cta-text">Desserts</a>
			</div>
			<div class="menu-category coffee">
				<a href="/menu/coffee" class="button cta-text">Evening Coffee</a>
			</div>
		</div>
		<div class="menu-row">
			<div class="menu-category morning">
				<a href="/menu/morning" class="button cta-text">Morning</a>
			</div>
		</div>


	</div><!-- .entry-content -->


</article><!-- #post-## -->
