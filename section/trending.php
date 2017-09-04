<?php

  $args = array(
    'post_per_page' => 5,
  );
  // The Query
  $the_query = new WP_Query( $args );

  // The Loop
  if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $link[] = get_the_permalink();
      $title[] = get_the_title();
      $thumb[] = get_the_post_thumbnail(get_the_ID(), 'small');
      $date[] = get_the_date();
      $author[] =  get_the_author();
      $author_link[] = get_the_author_link();
    }

    /* Restore original Post Data */
    wp_reset_postdata();
  } else {
    // no posts found
  }

  //var_dump($thumb);

if ( is_home() ) : ?>
<!-- Start trending post area -->
<div class="trending-post-area">
  <div class="container-fluid">
    <div class="row">
      <div class="trend-post-list zm-lay-c-wrap zm-posts clearfix">

        <!-- Start single trend post -->
        <div class="p-0 col-md-6 col-lg-6 col-sm-12 col-xs-12">
          <article class="zm-trending-post zm-lay-c large zm-single-post" data-dark-overlay="2.5" data-scrim-bottom="9" data-effict-zoom="1">
            <div class="zm-post-thumb">
              <?php if ( !empty($thumb[0]) ) :  ?>
                <?php echo $thumb[0]; ?>
              <?php else: ?>
                <img src="http://placehold.it/600x400" alt="img">
              <?php endif ?>
            </div>
            <div class="zm-post-dis text-white">
              <div class="zm-category"><a href="#" class="bg-cat-3 cat-btn">Nature</a></div>
              <h2 class="zm-post-title">
                <a href="<?php echo $link[0]; ?>"><?php echo $title[0]; ?></a>
              </h2>
              <div class="zm-post-meta">
                <ul>
                  <li class="s-meta"><a href="<?php echo $author_link[0]; ?>" class="zm-author"><?php echo $author[0]; ?></a></li>
                  <li class="s-meta"><?php echo $date[0]; ?></li>
                </ul>
              </div>
            </div>
          </article>
        </div>
        <!-- End single trend post -->
        <!-- Start single trend post -->
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 trending">
          <div class="row">
            <div class="col-md-12 col-sm-6 col-lg-12 col-xs-12 p-0">
              <article class="zm-trending-post zm-lay-c zm-single-post" data-dark-overlay="2.5" data-scrim-bottom="9" data-effict-zoom="1">
                <div class="zm-post-thumb">
                  <?php if ( !empty($thumb[1]) ) :  ?>
                    <?php echo $thumb[1]; ?>
                  <?php else: ?>
                    <img src="http://placehold.it/300x200" alt="img">
                  <?php endif ?>
                </div>
                <div class="zm-post-dis text-white">
                  <div class="zm-category"><a href="#" class="bg-cat-4 cat-btn">Food</a></div>
                  <h2 class="zm-post-title"><a href="<?php echo $link[1]; ?>"><?php echo $title[1]; ?></a></h2>
                  <div class="zm-post-meta">
                    <ul>
                      <li class="s-meta"><a href="<?php echo $author_link[1]; ?>" class="zm-author"><?php echo $author[1]; ?></a></li>
                      <li class="s-meta"><?php echo $date[1]; ?></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-12 col-sm-6 col-lg-12 col-xs-12 p-0">
              <article class="zm-trending-post zm-lay-c zm-single-post" data-dark-overlay="2.5" data-scrim-bottom="9" data-effict-zoom="1">
                <div class="zm-post-thumb">
                  <?php if ( !empty($thumb[2]) ) :  ?>
                    <?php echo $thumb[2]; ?>
                  <?php else: ?>
                    <img src="http://placehold.it/300x200" alt="img">
                  <?php endif ?>
                </div>
                <div class="zm-post-dis text-white">
                  <div class="zm-category"><a href="#" class="bg-cat-5 cat-btn">Fashion</a></div>
                  <h2 class="zm-post-title"><a href="<?php echo $link[2]; ?>"><?php echo $title[2]; ?></a></h2>
                  <div class="zm-post-meta">
                    <ul>
                      <li class="s-meta"><a href="<?php echo $author_link[2]; ?>" class="zm-author"><?php echo $author[2]; ?></a></li>
                      <li class="s-meta"><?php echo $date[2]; ?></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <!-- End single trend post -->
        <!-- Start single trend post -->
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 trending">
          <div class="row">
            <div class="col-md-12 col-sm-6 col-lg-12 col-xs-12 p-0">
              <article class="zm-trending-post zm-lay-c zm-single-post" data-dark-overlay="2.5" data-scrim-bottom="9" data-effict-zoom="1">
                <div class="zm-post-thumb">
                  <?php if ( !empty($thumb[3]) ) :  ?>
                    <?php echo $thumb[3]; ?>
                  <?php else: ?>
                    <img src="http://placehold.it/300x200" alt="img">
                  <?php endif ?>
                </div>
                <div class="zm-post-dis text-white">
                  <div class="zm-category"><a href="#" class="bg-cat-2 cat-btn">Business</a></div>
                  <h2 class="zm-post-title"><a href="<?php echo $link[3]; ?>"><?php echo $title[3]; ?></a></h2>
                  <div class="zm-post-meta">
                    <ul>
                      <li class="s-meta"><a href="<?php echo $author_link[3]; ?>" class="zm-author"><?php echo $author[3]; ?></a></li>
                      <li class="s-meta"><?php echo $date[3]; ?></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-12 col-sm-6 col-lg-12 col-xs-12 p-0">
              <article class="zm-trending-post zm-lay-c zm-single-post" data-dark-overlay="2.5" data-scrim-bottom="9" data-effict-zoom="1">
                <div class="zm-post-thumb">
                  <?php if ( !empty($thumb[4]) ) :  ?>
                    <?php echo $thumb[4]; ?>
                  <?php else: ?>
                    <img src="http://placehold.it/300x200" alt="img">
                  <?php endif ?>
                </div>
                <div class="zm-post-dis text-white">
                  <div class="zm-category"><a href="#" class="bg-cat-1 cat-btn">Animal</a></div>
                  <h2 class="zm-post-title"><a href="<?php echo $link[4]; ?>"><?php echo $title[4]; ?></a></h2>
                  <div class="zm-post-meta">
                    <ul>
                      <li class="s-meta"><a href="<?php echo $author_link[4]; ?>" class="zm-author"><?php echo $author[4]; ?></a></li>
                      <li class="s-meta"><?php echo $date[4]; ?></li>
                    </ul>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <!-- End single trend post -->
      </div>
    </div>
  </div>
</div>
<!-- End trending post area -->
<?php else: ?>

<?php endif; ?>
