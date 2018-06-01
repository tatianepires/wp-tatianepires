<?php
/*
 * Add MailChimp RSS
 * 
 * Create lastest post feed for MailChimp
 * 
 * Version: 1.0
 */

/*
 * Add /feed/mailchimp using the same template as /feed/customized
 */
function tps_rss_add_mailchimp(){
  add_feed('mailchimp', 'tps_mailchimp_feed');
}
add_action('init', 'tps_rss_add_mailchimp');

function tps_mailchimp_feed(){
  get_template_part('feed/rss2', 'mailchimp');
}
 
/**
 * Change the query for /feed/mailchimp
 */
function tps_change_mailchimp_query( $query ) {
  if ( $query->is_feed('mailchimp') ) {
    add_filter( 'post_limits', 'tps_mailchimp_latest_post' );
  }
  return $query;
}
add_filter( 'pre_get_posts', 'tps_change_mailchimp_query' );
 
/**
 * Limit to the latest post
 */
function tps_mailchimp_latest_post() {
  return 'LIMIT 0, 1';
}
