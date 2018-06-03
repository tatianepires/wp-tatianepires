<?php
add_shortcode( 'tagcloud', 'tps_tagcloud' );

function tps_tagcloud( $atts ) {
  $type = shortcode_atts( array(
    'display' => 'tags',
  ), $atts );
  if($type['display'] == 'cat' || $type['display'] == 'category' || $type['display'] == 'categories') {
    $items = wp_tag_cloud( array('taxonomy' => 'category', 'echo' => false) );
  } else {
    $items = wp_tag_cloud( array('taxonomy' => 'post_tag', 'echo' => false) );
  }
  $tagcloud = '<div class="tagcloud">' . $items . '</div>';
  return $tagcloud;
}
