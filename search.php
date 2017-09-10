<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package civitas
 */

get_header(); ?>

<div id="page-content" class="page-wrapper">
	<div class="section single-post-wrap bg-white ptb-70 xs-pt-30">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header mt-0 text-uppercase">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'civitas' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
get_sidebar();
get_footer();
