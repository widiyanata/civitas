<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
		
				// get_template_part( 'template-parts/content', get_post_format() );
				get_template_part( 'template-parts/content', 'archive' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
</div>


<?php
get_footer();
