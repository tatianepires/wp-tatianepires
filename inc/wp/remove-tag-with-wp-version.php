<?php
/*
 * Remove tag with WP version
 *
 * Plugin URI: http://www.wpbeginner.com/wp-tutorials/the-right-way-to-remove-wordpress-version-number/
 */

function wpbeginner_remove_version() {
  return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');
