<?php
/*
 * Functions to deal with the excerpt
 */

function tps_excerpt_length($length) {
  return 35;
}
add_filter('excerpt_length', 'tps_excerpt_length');

function tps_remove_parent_filters() {
  remove_filter('excerpt_more', 'twentyseventeen_excerpt_more');
}
add_action('after_setup_theme', 'tps_remove_parent_filters');
