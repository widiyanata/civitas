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
						<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
										<div class="zm-widget pr-40">
												<h2 class="h6 zm-widget-title uppercase text-white mb-30">About ZMagazine</h2>
												<div class="zm-widget-content">
														<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat, non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
														<p>Sed ut perspiciatis unde omnis iste, voluptatem dolore mque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi.</p>
												</div>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
										<div class="zm-widget">
												<h2 class="h6 zm-widget-title uppercase text-white mb-30">Social Links</h2>
												<div class="zm-widget-content">
														<div class="zm-social-media zm-social-1">
																<ul>
																		<li><a href="#"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
																		<li><a href="#"><i class="fa fa-twitter"></i>Tweet us on Twitter</a></li>
																		<li><a href="#"><i class="fa fa-pinterest"></i>Pin us on Pinterest</a></li>
																		<li><a href="#"><i class="fa fa-instagram"></i>Heart us on Instagram</a></li>
																		<li><a href="#"><i class="fa fa-google-plus"></i>Share us on GooglePlus</a></li>
																</ul>
														</div>
												</div>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class="zm-widget pr-50 pl-20">
												<h2 class="h6 zm-widget-title uppercase text-white mb-30">Popular Categories</h2>
												<div class="zm-widget-content">
														<div class="zm-category-widget zm-category-1">
																<ul>
																		<li><a href="#">Business<span>22</span></a></li>
																		<li><a href="#">Fashion<span>18</span></a></li>
																		<li><a href="#">Sports<span>09</span></a></li>
																		<li><a href="#">Technology<span>35</span></a></li>
																		<li><a href="#">Entertainment<span>7</span></a></li>
																</ul>
														</div>
												</div>
										</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
										<div class="zm-widget">
												<h2 class="h6 zm-widget-title uppercase text-white mb-30">Subscribe Newsletter</h2>
												<!-- Start Subscribe From -->
												<div class="zm-widget-content">
														<div class="subscribe-form subscribe-footer">
																<p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
																<form action="#">
																		<input type="text" placeholder="Enter your full name">
																		<input type="email" placeholder="Enter email address" required="">
																		<input type="submit" value="Subscribe">
																</form>
														</div>
												</div>
												<!-- End Subscribe From -->
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
												<ul>
														<li><a href="#">Home</a></li>
														<li><a href="#">Feature</a></li>
														<li><a href="#">Shortcodes</a></li>
														<li><a href="#">About</a></li>
														<li><a href="#">Contact</a></li>
												</ul>
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
