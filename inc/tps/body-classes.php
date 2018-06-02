<?php
add_filter('body_class', 'tps_body_classes');

function tps_body_classes($classes) {
  if( is_page() ) {
    global $post;

    $classes[] = "page-$post->post_name";
  }
  
  return $classes;
}
