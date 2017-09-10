<form action="<?php echo home_url('/'); ?>" method="get">
  <div class="input-group">
    <label class="sr-only" for="search">Search in <?php echo home_url( '/' ); ?></label>
    <span class="input-group-addon"><i class="fa fa-search"></i></span>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search"/>
    <!-- <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" /> -->
    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
  </div>
</form>
