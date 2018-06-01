<?php
function tps_custom_header_markup() {
  return sprintf(
    '<div id="wp-custom-header" class="wp-custom-header">%s</div>',
    tps_header_image_tag()
  );
}

function tps_header_image_tag() {
  global $post;

  if( is_page() && has_post_thumbnail($post->ID) ) {
    $thumb_id = get_post_thumbnail_id($post->ID); 
    $thumb_src = wp_get_attachment_image_src($thumb_id, 'large');
    $thumb_srcset = wp_get_attachment_image_srcset($thumb_id, 'large');  

    $header_image = sprintf('<img src="%s" width="2000" height="1200" alt="%s" srcset="%s"  sizes="100vw">',
      $thumb_src[0],
      get_the_title($post->ID),
      $thumb_srcset
    );
  }
  else {
    $thumb_src = sprintf('%s/img/header-media-default.jpg', get_stylesheet_directory_uri());
    
    if( is_single() ) $thumb_alt = get_the_title($post->ID);
    else $thumb_alt = sprintf('%s &mdash; %s', get_bloginfo('name'), get_bloginfo('description'));

    $header_image = sprintf('<img src="%s" width="2000" height="1200" alt="%s">',
      $thumb_src,
      $thumb_alt
    ); 
  }

  return $header_image;
}
