<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package civitas
 */

get_header(); ?>

<div id="page-content" class="page-wrapper">
	<div class="section single-post-wrap bg-white ptb-70 xs-pt-30">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">

					<section class="error-404 not-found">
						<header class="page-header mt-0 text-uppercase">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'civitas' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'civitas' ); ?></p>

							<?php
								get_search_form();

							?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
