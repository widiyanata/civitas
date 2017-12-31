<?php
/**
* Widget to display posts by category in sidebar or widget area
*/
class Cat_Widget_3_Col extends WP_Widget {

    // Widget Constructor
    public function __construct(){

      // $control_ops = array( 'width' => NULL, 'height' => NULL, 'id_base' => 'cv-widget' );
      parent::__construct(
        'cat-widget-3-col', // Base ID
        esc_html__('Section: 3 Columns Category', 'civitas'), // Widget Name
        array(
          'classname' => 'custom_widget',
          'description' => esc_html__('Widget to display posts by category, please please do not add this to widget sidebar', 'civitas') // Args
        )
        // $control_ops
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

      echo "<div class='row mt-40 mb-40'><div class='widget-cat-3-col'>";

      // Get posts_count field
      $section_postsnr = $instance['posts_count'];
      $col1 = ! empty( $instance['cat_widget_col_1'] ) ? $instance['cat_widget_col_1'] : '';
      $col2 = ! empty( $instance['cat_widget_col_2'] ) ? $instance['cat_widget_col_2'] : '';
      $col3 = ! empty( $instance['cat_widget_col_3'] ) ? $instance['cat_widget_col_3'] : '';

      for ($i=1; $i < 4; $i++)
      {
        echo "<div class='col-md-4'>";
        if ( !empty( $instance["title-$i"]  ) ) {
          echo $args['before_title'] . apply_filters('widget_title', $instance["title-$i"]) . $args['after_title'];
        }

        // Category ID
    		$cat_name = absint( ${"col$i"} );
        /* Query arguments
        ------------------ */
        // Posts in category
        $query_args = array(
          'posts_per_page'		=> absint( $section_postsnr ),
          'post_status'         	=> 'publish',
          'cat' => $cat_name,
          'ignore_sticky_posts'	=> 1,
          // 'orderby' => 'title',
        );

        // The Query
        $query_posts = new WP_Query( $query_args  );
        $c = 0;
        if( $query_posts->have_posts() && $query_posts->found_posts > 0 ) :
          while ( $query_posts->have_posts() ) :
            $query_posts->the_post();
            $c++;
            if ( $c == 1 ) { ?>

              <article class="trending-post lay-d single-post mb-20" data-dark-overlay="2.5" data-scrim-bottom="9" data-effict-zoom="1">
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
              <?php } else  {  ?>

              <article class="post-lay-g single-post clearfix mb-20">
                <div class="post-thumb f-left">
                <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                } else { ?>
                  <a href="#">
                    <img src="http://placehold.it/300x200" alt="img">
                  </a>
                <?php } ?>
              </div>
              <div class="post-dis f-right">
                <div class="post-header">
                  <?php the_title( '<h4 class="mb-10 post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
                  <div class="post-meta">
                    <ul>
                      <li class="s-meta"><a href="<?php the_author_link(); ?>" class="author"><?php the_author(); ?></a></li>
                      <li class="s-meta"><?php the_date(); ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
        <?php  } // end else ?>

            <?php
          endwhile;
        else :
          echo esc_attr__('No post found!');
        endif;

        echo "</div>";
      }

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
      $title1 = ! empty( $instance['title-1'] ) ? $instance['title-1'] : esc_html__( 'New title', 'civitas' );
      $title2 = ! empty( $instance['title-2'] ) ? $instance['title-2'] : esc_html__( 'New title', 'civitas' );
      $title3 = ! empty( $instance['title-3'] ) ? $instance['title-3'] : esc_html__( 'New title', 'civitas' );

      $posts_count = ! empty( $instance['posts_count'] ) ? $instance['posts_count'] : 5;
  		?>
  		<p>
    		<label for="<?php echo esc_attr( $this->get_field_id( 'title-1' ) ); ?>"><?php esc_attr_e( 'Title:', 'civitas' ); ?></label>
    		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-1' ) ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>">
  		</p>

      <p>
        <label for="<?php echo $this->get_field_id( 'cat_widget_col_1' ); ?>"><?php esc_html_e( 'Choose category', 'civitas' ); ?></label>
        <?php

        wp_dropdown_categories( array(

          'orderby'    => 'title',
          'hide_empty' => true,
          'name'       => $this->get_field_name( 'cat_widget_col_1' ),
          'id'         => $this->get_field_id( 'cat_widget_col_1' ),
          'class'      => 'widefat',
          'selected'   => intval($instance['cat_widget_col_1']),

        ) );

        ?>
      </p>

      <!-- Column 2 -->
      <p>
    		<label for="<?php echo esc_attr( $this->get_field_id( 'title-2' ) ); ?>"><?php esc_attr_e( 'Title:', 'civitas' ); ?></label>
    		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-2' ) ); ?>" type="text" value="<?php echo esc_attr( $title2 ); ?>">
  		</p>

      <p>
        <label for="<?php echo $this->get_field_id( 'cat_widget_col_2' ); ?>"><?php esc_html_e( 'Choose category', 'civitas' ); ?></label>
        <?php

        wp_dropdown_categories( array(

          'orderby'    => 'title',
          'hide_empty' => true,
          'name'       => $this->get_field_name( 'cat_widget_col_2' ),
          'id'         => $this->get_field_id( 'cat_widget_col_2' ),
          'class'      => 'widefat',
          'selected'   => intval($instance['cat_widget_col_2']),

        ) );

        ?>
      </p>

      <p>
    		<label for="<?php echo esc_attr( $this->get_field_id( 'title-3' ) ); ?>"><?php esc_attr_e( 'Title:', 'civitas' ); ?></label>
    		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title-3' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title-3' ) ); ?>" type="text" value="<?php echo esc_attr( $title3 ); ?>">
  		</p>

      <p>
        <label for="<?php echo $this->get_field_id( 'cat_widget_col_3' ); ?>"><?php esc_html_e( 'Choose category', 'civitas' ); ?></label>
        <?php

        wp_dropdown_categories( array(

          'orderby'    => 'title',
          'hide_empty' => true,
          'name'       => $this->get_field_name( 'cat_widget_col_3' ),
          'id'         => $this->get_field_id( 'cat_widget_col_3' ),
          'class'      => 'widefat',
          'selected'   => intval($instance['cat_widget_col_3']),

        ) );

        ?>
      </p>



      <!-- Add new field : Number of posts displayed -->
      <p>
        <label for="<?php echo $this->get_field_id('posts_count'); ?>"><?php esc_html_e('How many posts?', 'civitas') ?></label>
        <input type="number" name="<?php echo esc_attr( $this->get_field_name('posts_count') ); ?>" value="<?php echo esc_attr( $posts_count ); ?>" id="<?php echo $this->get_field_id('posts_count'); ?>">
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
  		$instance['title-1'] = ! empty( $new_instance['title-1'] ) ? strip_tags( $new_instance['title-1'] ) : '';
      $instance['title-2'] = ! empty( $new_instance['title-2'] ) ? strip_tags( $new_instance['title-2'] ) : '';
      $instance['title-3'] = ! empty( $new_instance['title-3'] ) ? strip_tags( $new_instance['title-3'] ) : '';
      $instance['cat_widget_col_1'] = absint( $new_instance['cat_widget_col_1'] );
      $instance['cat_widget_col_2'] = absint( $new_instance['cat_widget_col_2'] );
      $instance['cat_widget_col_3'] = absint( $new_instance['cat_widget_col_3'] );

      // New field : post count
      $instance['posts_count'] = !empty( $new_instance['posts_count'] ) ? strip_tags( $new_instance['posts_count'] ) :'5';

  		return $instance;
    }

}
