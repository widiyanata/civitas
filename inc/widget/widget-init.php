<?php
/**
* Register Custom Widget
*/

function register_custom_widget() {

  // Category Widget
  require_once get_template_directory() . '/inc/widget/widget-category.php';

  // Category Widget 3 Col
  require_once get_template_directory() . '/inc/widget/widget-category-3col.php';

  // Popular Widget
  require_once get_template_directory() . '/inc/widget/widget-popular.php';

  register_widget('Cat_Widget');
  register_widget('Popular_Widget');
  register_widget('Cat_Widget_3_Col');
}
add_action( 'widgets_init', 'register_custom_widget' );

 ?>
