<?php
/*
 * Unset url field from comment form
 */

function tps_comment_url_unset( $commentdata ) {
  unset( $commentdata['comment_author_url'] );

  return $commentdata;
}
add_filter( 'preprocess_comment', 'tps_comment_url_unset' );
