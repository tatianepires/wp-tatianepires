<?php
/*
 * Add MailChimp RSS
 * 
 * Create lastest post feed for MailChimp
 * 
 * Version: 1.0
 */

// Add /feed/mailchimp
function tps_rss_mailchimp(){
  add_feed('mailchimp', 'tps_mailchimp_feed');
}
add_action('init', 'tps_rss_mailchimp');

function tps_mailchimp_feed(){
  get_template_part('feed/rss2', 'mailchimp');
}
