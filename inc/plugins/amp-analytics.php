<?php
function tps_amp_analytics( $analytics ) {
  if ( ! is_array( $analytics ) ) {
    $analytics = array();
  }

  // https://developers.google.com/analytics/devguides/collection/amp-analytics/
  $analytics['tps-googleanalytics'] = array(
    'type' => 'googleanalytics',
    'attributes' => array(
      // 'data-credentials' => 'include',
    ),
    'config_data' => array(
      'vars' => array(
        'account' => "UA-1226174-22"
      ),
      'triggers' => array(
        'trackPageview' => array(
          'on' => 'visible',
          'request' => 'pageview',
        ),
      ),
    ),
  );

  return $analytics;
}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active('amp/amp.php') ) {
  add_filter( 'amp_post_template_analytics', 'tps_amp_analytics' );
}
