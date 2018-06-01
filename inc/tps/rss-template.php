<?php
/*
 * Change RSS template
 *
 * Version:     1.0
 */

remove_all_actions( 'do_feed_rss2' );

function tps_rss_template( $for_comments ) {
    $rss_template = get_stylesheet_directory() . '/feed/rss2.php';
    if( file_exists( $rss_template ) ) load_template( $rss_template );
    else do_feed_rss2( $for_comments ); // Call default function
}
add_action( 'do_feed_rss2', 'tps_rss_template', 10, 1 );
