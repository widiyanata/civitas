<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package civitas
 */

?>



<!-- Start footer area -->
<footer id="footer" class="footer-wrapper footer-1">
		<!-- Start footer top area -->
		<div class="footer-top-wrap ptb-70 bg-dark">
				<div class="container">
					<!-- Widget Footer 4 Column -->
						<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class="pr-40">
											<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('widget_footer_first_column') ) ?>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class=" pr-40">
											<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('widget_footer_second_column') ) ?>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class=" pr-40">
											<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('widget_footer_third_column') ) ?>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class=" pr-40">
											<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('widget_footer_forth_column') ) ?>
										</div>
								</div>

						</div>
				</div>
		</div>
		<!-- End footer top area -->
		<div class="footer-buttom bg-black ptb-15">
				<div class="container">
						<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
										<div class="zm-copyright">
											<div class="site-info">
												<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'civitas' ) ); ?>"><?php
													/* translators: %s: CMS name, i.e. WordPress. */
													printf( esc_html__( 'Proudly powered by %s', 'civitas' ), 'WordPress' );
												?></a>
												<span class="sep"> | </span>
												<?php
													/* translators: 1: Theme name, 2: Theme author. */
													printf( esc_html__( 'Theme: %1$s by %2$s.', 'civitas' ), 'civitas', '<a href="https://automattic.com/">Widiyanata</a>' );
												?>
											</div><!-- .site-info -->
										</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 text-right hidden-xs">
										<nav class="footer-menu zm-secondary-menu text-right">
											<?php
											// Footer Menu
												wp_nav_menu(
													array(
														'menu' => 'menu-footer',
														'theme_location' => 'menu-footer',
													)
												);
											 ?>
										</nav>
								</div>
						</div>
				</div>
		</div>
</footer>
<!-- End footer area -->
</div>
<!-- wrapper end -->
<?php wp_footer(); ?>
</body>
</html>
