<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package civitas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php civitas_posted_on(); ?>
			<p><?php  civitas_entry_footer(); ?></p>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<!-- Post thumbnail -->
	<div class="post-thumb">
		<?php if(has_post_thumbnail() ) :
			the_post_thumbnail();
		endif; ?>
	</div>


	<div class="entry-content">
		<?php
		/**
		*	Display Excerpt in Home
		*	and content in single page
		*/
		if ( is_single() ) {
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'civitas' ),
				'after'  => '</div>',
			) );
		} else {
			the_excerpt();
		}


		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php civitas_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
