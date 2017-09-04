<?php
/**
* Slider
* Get posts from sticky post
*/

$args = array(
  'posts_per_page' => 2,
  // 'post__in' => get_option('sticky_posts'),
);

$query = new WP_Query( $args );


// The Loop
if ( $query->have_posts() ) { ?>

  <!-- Start trending post -->
  <div class="trending-post-area owl-trending bg-dark controls-1 mb-70">

    <?php while ( $query->have_posts() ) {
      $query->the_post();
    ?>
    <article class="zm-trending-post zm-lay-c large zm-single-post" data-dark-overlay="2.5"  data-scrim-bottom="9" data-effict-zoom="1">
        <div class="zm-post-thumb">
          <!-- Post Thumbnail -->
          <?php if( has_post_thumbnail() ) :?>
            <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="http://placehold.it/600x400" alt="">
          <?php endif; ?>
        </div>
        <div class="zm-post-dis text-white">
            <!-- <div class="zm-category"><a href="#" class="bg-cat-2 cat-btn">Nature</a></div> -->
            <h2 class="zm-post-title"><a href="<?php  the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <div class="zm-post-meta">
                <ul>
                    <li class="s-meta"><a href="<?php echo the_author_link(); ?>" class="zm-author"><?php echo the_author_nickname(); ?></a></li>
                    <li class="s-meta"><?php echo the_date() ?></li>
                </ul>
            </div>
        </div>
    </article>

    <?php } ?>
  </div>
  <!-- End trending post -->

<?php
  /* Restore original Post Data */
  wp_reset_postdata();
} else {
  // no posts found
  get_template_part( 'template-parts/content', 'none' );
}

 ?>
