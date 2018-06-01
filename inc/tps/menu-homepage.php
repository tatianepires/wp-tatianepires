<?php
function tps_register_top_home() {
  register_nav_menu('top-home', 'Top Menu Homepage');
}
add_action( 'init', 'tps_register_top_home' );
