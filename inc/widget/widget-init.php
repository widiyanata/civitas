<?php
/**
* Register Custom Widget
*/

function register_custom_widget() {

  // Category Widget
  require_once get_template_directory() . '/inc/widget/widget-category.php';

  register_widget('Cat_Widget');
}
add_action( 'widgets_init', 'register_custom_widget' );

 ?>
