<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package civitas
 */

get_header(); ?>

  <section id="page-content" class="page-wrapper">
		<!-- Start world news [layout A1+E+A]  -->
		<div class="zm-section bg-white ptb-70">
			<div class="container">
				<div class="row">
					<!-- Start left side -->
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
						<div class="row mb-40">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="section-title">
									<h2 class="h6 header-color inline-block uppercase">World News</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="zm-posts clearfix">
								<!-- Start single post layout B -->
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
									<article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
										<div class="zm-post-thumb">
											<a href="#" data-dark-overlay="2.5" data-scrim-bottom="9"><img src="http://placehold.it/200x200" alt="img"></a>
										</div>
										<div class="zm-post-dis text-white">
											<h2 class="zm-post-title h3"><a href="#">Exercitation ullamco aute laboris nisi... </a></h2>
											<div class="zm-post-meta">
												<ul>
													<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
												</ul>
											</div>
										</div>
									</article>
								</div>
								<!-- End single post layout B -->
							</div>
						</div>
						<!-- Start Advertisement -->
						<div class="advertisement">
							<div class="row mt-40">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
									<a href="#"><img src="http://placehold.it/800x150" alt=""></a>
								</div>
							</div>
						</div>
						<!-- End Advertisement -->
					</div>
					<!-- End left side -->
					<!-- Start Righr side -->
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 columns">
						<!-- Start Subscribe From -->
						<div class="col-md-6 col-lg-12 col-sm-6 sm-mt-60">
							<aside class="subscribe-form bg-dark text-center sidebar md-mt-70">
								<h3 class="uppercase zm-post-title">Get Email Updates</h3>
								<p>Join 80,000+ awesome subscribers and update yourself with our exclusive news.</p>
								<form action="#">
									<input placeholder="Enter your full name" type="text">
									<input placeholder="Enter email address" required="" type="email">
									<input value="Subscribe" type="submit">
								</form>
							</aside>
						</div>
						<!-- End Subscribe From -->

						<aside class="zm-tagcloud-list col-md-6 col-sm-6 col-lg-12 hidden-sm mt-70">
							<div class="row mb-40">
								<div class="col-md-12">
									<div class="section-title">
										<h2 class="h6 header-color inline-block uppercase">Tags</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="zm-tagcloud">
										<a href="#">Business</a>
										<a href="#">Technology</a>
										<a href="#">Sprot</a>
										<a href="#">Art</a>
										<a href="#">Sprot</a>
										<a href="#">Lifestyle</a>
										<a href="#">Three</a>
										<a href="#">Typhography</a>
										<a href="#">Education</a>
										<a href="#">Technology</a>
										<a href="#">Sprot</a>
										<a href="#">Lifestyle</a>
										<a href="#">Art</a>
										<a href="#">Sprot</a>
										<a href="#">Three</a>
										<a href="#">Typhography</a>
										<a href="#">Education</a>
									</div>
								</div>
							</div>
						</aside>
						<!-- Start post layout E -->
						<aside class="zm-post-lay-e-area col-md-6 col-sm-6 col-lg-12 mt-60 hidden-md">
							<div class="row mb-40">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="section-title">
										<h2 class="h6 header-color inline-block uppercase">Most Commented</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="zm-posts clearfix">
										<!-- Start single post layout E -->
										<article class="zm-post-lay-e zm-single-post clearfix">
											<div class="zm-post-thumb f-left">
												<a href="#"><img src="images/post/e/5.jpg" alt="img"></a>
											</div>
											<div class="zm-post-dis f-right">
												<div class="zm-post-header">
													<h2 class="zm-post-title"><a href="#">Magna aliqua ut enim ad minim veniam quis nostrud.</a></h2>
													<div class="zm-post-meta">
														<ul>
															<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
															<li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
										<!-- Start single post layout E -->
										<!-- Start single post layout E -->
										<article class="zm-post-lay-e zm-single-post clearfix">
											<div class="zm-post-thumb f-left">
												<a href="#"><img src="images/post/e/2.jpg" alt="img"></a>
											</div>
											<div class="zm-post-dis f-right">
												<div class="zm-post-header">
													<h2 class="zm-post-title"><a href="#">Enim ad minim veniam nostrud xercitation ullamco.</a></h2>
													<div class="zm-post-meta">
														<ul>
															<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
															<li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
										<!-- Start single post layout E -->
										<!-- Start single post layout E -->
										<article class="zm-post-lay-e zm-single-post clearfix">
											<div class="zm-post-thumb f-left">
												<a href="#"><img src="images/post/e/6.jpg" alt="img"></a>
											</div>
											<div class="zm-post-dis f-right">
												<div class="zm-post-header">
													<h2 class="zm-post-title"><a href="#">Enim ad minim veniam nostrud xercitation ullamco.</a></h2>
													<div class="zm-post-meta">
														<ul>
															<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
															<li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
										<!-- Start single post layout E -->
										<!-- Start single post layout E -->
										<article class="zm-post-lay-e zm-single-post hidden-sm  clearfix">
											<div class="zm-post-thumb f-left">
												<a href="#"><img src="images/post/e/7.jpg" alt="img"></a>
											</div>
											<div class="zm-post-dis f-right">
												<div class="zm-post-header">
													<h2 class="zm-post-title"><a href="#">Laboris nisi ut aliquip dolor in elit reprehenderit velit esse.</a></h2>
													<div class="zm-post-meta">
														<ul>
															<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
															<li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
										<!-- Start single post layout E -->
										<!-- Start single post layout E -->
										<article class="zm-post-lay-e zm-single-post hidden-sm  clearfix">
											<div class="zm-post-thumb f-left">
												<a href="#"><img src="images/post/e/8.jpg" alt="img"></a>
											</div>
											<div class="zm-post-dis f-right">
												<div class="zm-post-header">
													<h2 class="zm-post-title"><a href="#">Duis aute irure dolor in velit esse cillum fugiat nulla.</a></h2>
													<div class="zm-post-meta">
														<ul>
															<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
															<li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
										<!-- Start single post layout E -->
										<!-- Start single post layout E -->
										<article class="zm-post-lay-e zm-single-post hidden-sm  clearfix">
											<div class="zm-post-thumb f-left">
												<a href="#"><img src="images/post/e/3.jpg" alt="img"></a>
											</div>
											<div class="zm-post-dis f-right">
												<div class="zm-post-header">
													<h2 class="zm-post-title"><a href="#">Laboris nisi ut aliquip dolor in elit reprehenderit velit esse.</a></h2>
													<div class="zm-post-meta">
														<ul>
															<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
															<li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
										<!-- Start single post layout E -->
										<!-- Start single post layout E -->
										<article class="zm-post-lay-e zm-single-post hidden-sm clearfix">
											<div class="zm-post-thumb f-left">
												<a href="#"><img src="images/post/e/2.jpg" alt="img"></a>
											</div>
											<div class="zm-post-dis f-right">
												<div class="zm-post-header">
													<h2 class="zm-post-title"><a href="#">Duis aute irure dolor in velit esse cillum fugiat nulla.</a></h2>
													<div class="zm-post-meta">
														<ul>
															<li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
															<li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
														</ul>
													</div>
												</div>
											</div>
										</article>
										<!-- Start single post layout E -->
									</div>
								</div>
							</div>
						</aside>
						<!-- End post layout E -->
					</div>
					<!-- End Right side -->
				</div>
			</div>
		</div>
		<!-- End world news [layout A1+E+A]  -->

    <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
      <header>
        <h1 class="page-title screen-reader-text">
          <?php single_post_title(); ?>
        </h1>
      </header>

      <?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		<!-- Start pagination area -->
		<div class="row hidden-xs">
			<div class="zm-pagination-wrap mt-30">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<nav class="zm-pagination ptb-40 text-center">
								<ul class="page-numbers">
									<li><a class="prev page-numbers" href="#">Previous</a></li>
									<li><span class="page-numbers current">1</span></li>
									<li><a class="page-numbers" href="#">2</a></li>
									<li><a class="page-numbers" href="#">3</a></li>
									<li><a class="page-numbers" href="#">4</a></li>
									<li><a class="page-numbers" href="#">5</a></li>
									<li><span class="page-numbers zm-pgi-dots">...</span></li>
									<li><a class="page-numbers" href="#">15</a></li>
									<li><a class="next page-numbers" href="#">Next</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End pagination area -->
  </section>

  <?php
get_sidebar();
get_footer();
