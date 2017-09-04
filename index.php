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
		<!-- Start  news  -->
		<div class="zm-section bg-white ptb-70">
			<div class="container">
				<div class="row">

					<!-- Start left side -->
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
            <?php get_template_part('section/trending', 'slider') ?>
						<div class="row mb-40">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="section-title">
									<h2 class="h6 header-color inline-block uppercase">Latest News</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="zm-posts clearfix">
								<div class="" id="articles">

                <?php if (have_posts()) : ?>

                	<?php while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    									<article class="zm-trending-post zm-lay-a1 zm-single-post" data-effict-zoom="1">
    										<div class="zm-post-thumb">
    											<a href="<?php the_permalink() ?>" data-dark-overlay="2.5" data-scrim-bottom="9">
                            <?php if ( has_post_thumbnail() ) :?>
                              <?php the_post_thumbnail(); ?>
                            <?php else:  ?>
                              <img src="http://placehold.it/200x200" alt="img">
                            <?php endif; ?>
                          </a>
    										</div>
    										<div class="zm-post-dis text-white">
    											<h2 class="zm-post-title h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    											<div class="zm-post-meta">
    												<ul>
    													<li class="s-meta"><a href="#" class="zm-author"><?php the_author(); ?></a></li>
    												</ul>
    											</div>
    										</div>
    									</article>
    								</div>

                	<?php endwhile;
                  // the_posts_navigation();

                  else : ?>

                		<?php // No Posts Found ?>

                <?php endif; ?>

                </div>
							</div>

						</div>
            <!-- Start pagination area -->
        		<div class="row">
        			<div class="zm-pagination-wrap mt-30">
    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                  <?php the_posts_pagination(); ?>
        				</div>
        			</div>
        		</div>
        		<!-- End pagination area -->
						<!-- Start Advertisement : Still Static -->
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
		<!-- End news  -->
  </section>

  <?php
get_footer();
