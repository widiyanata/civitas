<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package civitas
 */

get_header(); ?>

<div id="page-content" class="page-wrapper">
	<div class="zm-section single-post-wrap bg-white ptb-70 xs-pt-30">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							
							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
					<?php get_sidebar(); ?>
				</div>
		</div>
	</div>
</div>

<?php
get_footer();
