<?php
/**
 * Template name: Front page
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
						<?php get_sidebar(); ?>
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
// get_sidebar();
get_footer();
