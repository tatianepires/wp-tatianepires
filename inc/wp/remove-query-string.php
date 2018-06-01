<?php
/*
 * Remove Query String
 * 
 * Remove from JS and CSS files string with WP current version.
 *
 * Author: Matthew Horne
 * Plugin URI: http://diywpblog.com/wordpress-optimization-remove-query-strings-from-static-resources/
 * Version: 1.0
 * License: GPL2+
 */

function tps_remove_script_version( $src ){
    $parts = explode( '?ver', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', 'tps_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'tps_remove_script_version', 15, 1 );
