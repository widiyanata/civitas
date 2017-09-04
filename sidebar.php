<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package civitas
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!-- Start Subscribe From -->
<!-- <div class="col-md-6 col-lg-12 col-sm-6 sm-mt-60">
	<aside class="subscribe-form bg-dark text-center sidebar md-mt-70">
		<h3 class="uppercase zm-post-title">Get Email Updates</h3>
		<p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
		<form action="#">
			<input placeholder="Enter your full name" type="text">
			<input placeholder="Enter email address" required="" type="email">
			<input value="Subscribe" type="submit">
		</form>
	</aside>
</div> -->
<!-- End Subscribe From -->


<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
