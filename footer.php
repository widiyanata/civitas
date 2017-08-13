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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
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
	</footer><!-- #colophon -->
</div><!-- #page -->


<!-- Footer start -->
<footer>
	<div class="top-sec">
		<div class="container ">
			<div class="row match-height-container">
				<div class="col-sm-6 subscribe-info wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
					<div class="row">
						<div class="col-sm-16">
							<div class="f-title">globalnews theme</div>
							<p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
						</div>
						<div class="col-sm-16">
							<div class="f-title">subscribe to news letter</div>
							<form class="form-inline">
								<input type="email" class="form-control" id="input-email" placeholder="Type your e-mail adress">
								<button type="submit" class="btn"> <span class="ion-paper-airplane text-danger"></span> </button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-5 popular-tags  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
					<div class="f-title">popular tags</div>
					<ul class="tags list-unstyled pull-left">
						<li><a href="#">Business</a></li>
						<li><a href="#">Science</a></li>
						<li><a href="#">video conferece</a></li>
						<li><a href="#">conferece</a></li>
						<li><a href="#">Photo</a></li>
						<li><a href="#">education</a></li>
						<li><a href="#">Smart phones</a></li>
						<li><a href="#">Samsung mobile</a></li>
						<li><a href="#">AI</a></li>
						<li><a href="#">video conferece</a></li>
						<li><a href="#">conferece</a></li>
						<li><a href="#">education</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">computer</a></li>
					</ul>
				</div>
				<div class="col-sm-5 recent-posts  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="40">
					<div class="f-title">recent posts</div>
					<ul class="list-unstyled">
						<li> <a href="#">
							<div class="row">
								<div class="col-sm-4"><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-1.jpg" width="70" height="70" alt=""/> </div>
								<div class="col-sm-12">
									<h4>The evolution of the apple ..</h4>
									<div class="f-sub-info">
										<div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
										<div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
										<div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
									</div>
								</div>
							</div>
							</a> </li>
						<li> <a href="#">
							<div class="row">
								<div class="col-sm-4 "><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-2.jpg" width="70" height="70" alt=""/> </div>
								<div class="col-sm-12">
									<h4>The evolution of the apple ..</h4>
									<div class="f-sub-info">
										<div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
										<div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
										<div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
									</div>
								</div>
							</div>
							</a> </li>
						<li> <a href="#">
							<div class="row">
								<div class="col-sm-4"><img class="img-thumbnail pull-left" src="images/footer-recent/f-recent-3.jpg" width="70" height="70" alt=""/> </div>
								<div class="col-sm-12">
									<h4>The evolution of the apple ..</h4>
									<div class="f-sub-info">
										<div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
										<div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
										<div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
									</div>
								</div>
							</div>
							</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="btm-sec">
		<div class="container">
			<div class="row">
				<div class="col-sm-16">
					<div class="row">
						<div class="col-sm-10 col-xs-16 f-nav wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">
							<ul class="list-inline ">
								<li> <a href="#"> Home </a> </li>
								<li> <a href="#"> Business </a> </li>
								<li> <a href="#"> Science </a> </li>
								<li> <a href="#"> Lifestyle </a> </li>
								<li> <a href="#"> Politics </a> </li>
								<li> <a href="#"> Sport </a> </li>
								<li> <a href="#">short codes</a> </li>
								<li> <a href="#"> Contact </a> </li>
							</ul>
						</div>
						<div class="col-sm-6 col-xs-16 copyrights text-right wow fadeInDown animated" data-wow-delay="0.5s" data-wow-offset="10">© 2014 GLOBALNEWS THEME - ALL RIGHTS RESERVED</div>
					</div>
				</div>
				<div class="col-sm-16 f-social  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="10">
					<ul class="list-inline">
						<li> <a href="#"><span class="ion-social-twitter"></span></a> </li>
						<li> <a href="#"><span class="ion-social-facebook"></span></a> </li>
						<li> <a href="#"><span class="ion-social-instagram"></span></a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer end -->
<div id="create-account" class="white-popup mfp-with-anim mfp-hide">
	<form role="form">
		<h3>Create Account</h3>
		<hr>
		<div class="row">
			<div class="col-sm-8">
				<div class="form-group">
					<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
					<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2">
				</div>
			</div>
		</div>
		<div class="form-group">
			<input type="text" name="display_name" id="display_name" class="form-control" placeholder="Display Name" tabindex="3">
		</div>
		<div class="form-group">
			<input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4">
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
					<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-16">
				<input type="submit" value="Register" class="btn btn-danger btn-block btn-lg" tabindex="7">
			</div>
		</div>
	</form>
</div>
<div id="log-in" class="white-popup mfp-with-anim mfp-hide">
	<form role="form">
		<h3>Log In Your Account</h3>
		<hr>
		<div class="form-group">
			<input type="text" name="access_name" id="access_name" class="form-control" placeholder="Name" tabindex="3">
		</div>
		<div class="form-group">
			<input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="4">
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-16">
				<input type="submit" value="Log In" class="btn btn-danger btn-block btn-lg" tabindex="7">
			</div>
		</div>
	</form>
</div>
</div>
<!-- wrapper end -->
<?php wp_footer(); ?>
</body>
</html>
