<?php
/*
 * RSS functions
 *
 * tps_rss_post_image()
 * tps_rss_read_more()
 * tps_rss_first_published()
 *
 * Version: 1.0
 */

function tps_rss_post_image() {
  global $post;

  if( has_post_thumbnail($post->ID) ) {
    $thumb_id = get_post_thumbnail_id($post->ID); 
    $thumb_src = wp_get_attachment_image_src($thumb_id, 'large');

    $feat_image = sprintf('<div style="text-align:center;"><a href="%s"><img src="%s" width="%d" height="%d"></a></div>', get_permalink($post->ID), $thumb_src[0], $thumb_src[1], $thumb_src[2]);
  }
  else {
    // check if post has image attachments
    $attArgs = array(
      'post_type'  => 'attachment',
      'post_parent' => $post->ID,
      'post_mime_type' => array('image/jpeg','image/png')
    );
    $attachments = get_posts($attArgs);

    if( count($attachments) ) {
      // The first image added to the post is the last in $attachments
      $img = end($attachments);

      $attachment = wp_get_attachment_image_src($img->ID, 'large');

      $feat_image = sprintf('<div style="text-align:center;"><a href="%s"><img src="%s" width="%d" height="%d"></a></div>', get_permalink($post->ID), $attachment[0], $attachment[1], $attachment[2]);
    }
    else {
      $feat_image = '';
    }
  }

  return $feat_image;
}

function tps_rss_read_more() {
  global $post;

  if( $post->post_type == 'post_en' ) $read_more = ' <a href="'.get_the_permalink($post).'">Read more &raquo;</a>';
  else $read_more = ' <a href="'.get_the_permalink($post).'">Leia mais &raquo;</a>';

  return $read_more;
}

function tps_rss_first_published() {
  global $post;

  $first_published = '<p style="margin-top:32px;">';
  $first_published .= '<a href="'.get_the_permalink($post).'">'.$post->post_title.'</a>';
  
  if( $post->post_type == 'post_en' ) $first_published .= ' originally posted on the blog ';
  else $first_published .= ' publicado originalmente no blog ';
  $first_published .= '<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>.';
  
  $first_published .= '</p>';

  return $first_published;
}
