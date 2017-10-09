<?php
/**
* Widget to display posts by category in sidebar or widget area
*/
class Section_Category_Widget extends WP_Widget {

    // Widget Constructor
    public function __construct(){
      parent::__construct(
        'category_widget', // Base ID
        esc_html__('Section: Category Posts Widget', 'civitas'), // Widget Name
        array(
          'description' => esc_html__('Widget to display category post', 'civitas') // Args
        )
      );
    }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
    public function widget( $args, $instance ) {
      echo $args['before_widget'];
      if ( !empty( $instance['title']  ) ) {
        echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
      }

      $item_to_display = $instance['item-to-display'];
      if ( $item_to_display > 4 ) {
        $item_to_display = 4;
      }
      echo "<div class='row mt-40 mb-40 mr-0 ml-0'><div class='widget-featured owl-active-$item_to_display'>";
      // Get posts_count field
      $section_postsnr = $instance['posts_count'];

      // Get Sticky posts
      $sticky = get_option('sticky_posts');

      /* Query arguments
      ------------------ */
      // Posts in category
      $query_args = array(
        'posts_per_page'		=> absint( $section_postsnr ),
        'post_status'         	=> 'publish',
        // 'post__in' => $sticky,
        'cat' => $instance['cat_widget'],
      );

      // The Query
      $query_posts = new WP_Query( $query_args );

      $i = 0;
      if( $query_posts->have_posts()) :
        while ( $query_posts->have_posts() ) :
          $query_posts->the_post();
          $i++;
          ?>

            <article class="trending-post lay-d single-post mb-20" data-effict-zoom="1"  data-dark-overlay="2.5" data-scrim-bottom="9">
              <div class="post-thumb">
                <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                } else { ?>
                  <a href="#" data-dark-overlay="2.5" data-scrim-bottom="9">
                    <img src="http://placehold.it/300x200" alt="img">
                  </a>
                <?php } ?>
              </div>
              <div class="post-dis text-white">
                <?php the_title( '<h4 class="mb-10 post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
                <div class="post-meta">
                  <ul>
                    <li class="s-meta"><a href="<?php the_author_link(); ?>" class="author"><?php the_author(); ?></a></li>
                    <li class="s-meta"><?php the_date(); ?></li>
                  </ul>
                </div>
              </div>
            </article>

          <?php
        endwhile;
      endif;

      echo "</div></div>";
      echo $args['after_widget'];
    }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
    public function form( $instance ) {
      $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'civitas' );
      $posts_count = ! empty( $instance['posts_count'] ) ? $instance['posts_count'] : 5;
      $item_to_display = ! empty( $instance['item-to-display'] ) ? $instance['item-to-display'] : 4;
      $cat = ! empty( $instance['cat_widget'] ) ? $instance['cat_widget'] : '';
  		?>
  		<p>
    		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'civitas' ); ?></label>
    		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
  		</p>
      <p>
        <label for="<?php echo $this->get_field_id( 'cat_widget' ); ?>"><?php esc_html_e( 'Choose category', 'civitas' ); ?></label>
      <?php
      wp_dropdown_categories( array(

        'orderby'    => 'title',
        'hide_empty' => true,
        'name'       => $this->get_field_name( 'cat_widget' ),
        'id'         => $this->get_field_id( 'cat_widget' ),
        'class'      => 'widefat',
        'selected'   => intval($cat),

      ) );
      ?>
    </p>

    <!-- Add new field : Number of posts displayed -->
    <p>
      <label for="<?php echo $this->get_field_id('posts_count'); ?>"><?php esc_html_e('How many posts?', 'civitas') ?></label>
      <input type="number" name="<?php echo esc_attr( $this->get_field_name('posts_count') ); ?>" value="<?php echo esc_attr( $posts_count ); ?>" id="<?php echo $this->get_field_id('posts_count'); ?>">
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'item-to-display' ) ); ?>"><?php esc_attr_e( 'Item to display:', 'civitas' ); ?></label>
      <input class="" id="<?php echo esc_attr( $this->get_field_id( 'item-to-display' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'item-to-display' ) ); ?>" type="number" value="<?php echo esc_attr( $item_to_display ); ?>" maxlength="5">
      <span class="description"><?php esc_html_e('Max: 4, if  greater, then will count as 4', 'civitas') ?></span>
    </p>


  		<?php
    }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
    public function update( $new_instance, $old_instance ) {
      // processes widget options on save
      $instance = $old_instance;
  		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
      $instance['cat_widget'] = $new_instance['cat_widget'];

      // New field : post count
      $instance['posts_count'] = ( !empty( $new_instance['posts_count'] ) ) ? strip_tags( $new_instance['posts_count'] ) :'5';

      $instance['item-to-display'] = ( !empty( $new_instance['item-to-display'] ) ) ? strip_tags( $new_instance['item-to-display'] ) :'4';

  		return $instance;
    }

}
