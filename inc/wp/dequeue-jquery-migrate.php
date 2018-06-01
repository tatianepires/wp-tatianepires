<?php
/*
 * Dequeue jQuery Migrate
 * 
 * Plugin URI: https://github.com/cedaro/dequeue-jquery-migrate/blob/develop/dequeue-jquery-migrate.php
 * Version: 1.0
 */

function tps_dequeue_jquery_migrate( $scripts ) {
  if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
    $jquery_dependencies = $scripts->registered['jquery']->deps;
    $scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
  }
}
add_action( 'wp_default_scripts', 'tps_dequeue_jquery_migrate' );
