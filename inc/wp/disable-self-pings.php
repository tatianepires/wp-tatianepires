<?php
/*
 * Disable self pings
 * 
 * Unset pingback for links inside the blog.
 * 
 * Author: WP Beginner
 * Plugin URI: http://www.wpbeginner.com/wp-tutorials/how-disable-self-pingbacks-in-wordpress/
 * Version: 1.0
 */
 
function no_self_ping( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, $home ) )
			unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );
