<?php
/**
* Widget to display posts by popular in sidebar or widget area
*/
class Popular_Widget extends WP_Widget {

    // Widget Constructor
    public function __construct(){
      parent::__construct(
        'popular_widget', // Base ID
        esc_html__('Sidebar: Widget Popular', 'civitas'), // Widget Name
        array(
          'description' => esc_html__('Widget to display popular posts', 'civitas') // Args
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

      echo "<ul class='widget-popular owl-active-$item_to_display'>";

      // Get posts_count field
      $section_postsnr = $instance['posts_count'];

      /* Query arguments
      ------------------ */
      // Popular posts
      $query_args = array(
        'posts_per_page'		=> absint( $section_postsnr ),
        'post_status'         	=> 'publish',
        'orderby'   => 'comment_count',
        'ignore_sticky_posts'	=> 1
      );

      // The Query
      $query_posts = new WP_Query( apply_filters( 'widget_popular', $query_args ) );
      $i = 0;
      if( $query_posts->have_posts()) :
        while ( $query_posts->have_posts() ) :
          $query_posts->the_post();
          $i++;
          ?>
          <li>
            <article class="" data-dark-overlay="2.5"  data-scrim-bottom="9" data-effict-zoom="1">
              <!-- Post Thumbnail -->
              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              } else { ?>
                <img src="http://placehold.it/300x200" alt="">
              <?php } ?>
              <div class="post-popular">
                <!-- Category -->
                <?php the_category(); ?>
                <?php the_title( '<h4 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>

              </div>
            </article>
          </li>

          <?php
        endwhile;
      endif;

      echo "</ul>";
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
      $item_to_display = ! empty( $instance['item-to-display'] ) ? $instance['item-to-display'] : '';
  		?>
  		<p>
    		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'civitas' ); ?></label>
    		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
  		</p>

      <!-- Add new field : Number of posts displayed -->
      <p>
        <label for="<?php echo $this->get_field_id('posts_count'); ?>"><?php esc_html_e('How many posts?', 'civitas') ?></label>
        <input type="number" name="<?php echo esc_attr( $this->get_field_name('posts_count') ); ?>" value="<?php echo esc_attr( $posts_count ); ?>" id="<?php echo $this->get_field_id('posts_count'); ?>">
      </p>
      <!-- Number of item to display -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'item-to-display' ) ); ?>"><?php esc_attr_e( 'Item to display:', 'civitas' ); ?></label>
        <input class="" id="<?php echo esc_attr( $this->get_field_id( 'item-to-display' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'item-to-display' ) ); ?>" type="number" value="<?php echo esc_attr( $item_to_display ); ?>" maxlength="5">
        <span class="description"><?php esc_html_e('Max: 4, if  greater, then will count as 4', 'civitas') ?></span>
        <p class="description"><?php esc_html_e('To disable owl carousel, set to none (empty)', 'civitas') ?></p>
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
      $instance['popular_widget'] = absint( $new_instance['popular_widget'] );

      // New field : post count
      $instance['posts_count'] = ( !empty( $new_instance['posts_count'] ) ) ? strip_tags( $new_instance['posts_count'] ) :'5';

      $instance['item-to-display'] = ( !empty( $new_instance['item-to-display'] ) ) ? strip_tags( $new_instance['item-to-display'] ) :'';

  		return $instance;
    }

}
