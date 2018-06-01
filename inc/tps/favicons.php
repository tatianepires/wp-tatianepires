<?php
// Admin/Login favicon
function tps_admin_favicon() {
  $favicon_url = get_stylesheet_directory_uri() . '/img/tps-favicon-admin.png';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('login_head', 'tps_admin_favicon');
add_action('admin_head', 'tps_admin_favicon');

// Frontend favicon
function tps_favicon() {
  $favicon_url = get_stylesheet_directory_uri() . '/img/tps-favicon.png';
  printf('<link rel="shortcut icon" href="%s" />', $favicon_url);
}
add_action('wp_head', 'tps_favicon');

function tps_apple_icon() {
  $icon_url = get_stylesheet_directory_uri() . '/img/tps-favicon.png';
  printf('<link rel="apple-touch-icon" href="%s">', $icon_url);
}
add_action('wp_head', 'tps_apple_icon');
