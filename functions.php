<?php
// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Stylesheets and Scripts
//   02. Theme
//   03. WordPress
//   04. Plugins
//   05. One-liners
// =============================================================================

// Stylesheets and Scripts
// =============================================================================

require_once get_stylesheet_directory() . '/inc/frontend-scripts.php';

// Theme
// =============================================================================

require_once get_stylesheet_directory() . '/inc/tps/builder-block-shortcodes.php';
require_once get_stylesheet_directory() . '/inc/tps/builder-element-shortcodes.php';
require_once get_stylesheet_directory() . '/inc/tps/builder-module-functions.php';
require_once get_stylesheet_directory() . '/inc/tps/custom-header-markup.php';
require_once get_stylesheet_directory() . '/inc/tps/excerpt.php';
require_once get_stylesheet_directory() . '/inc/tps/favicons.php';
require_once get_stylesheet_directory() . '/inc/tps/login-customize.php';
require_once get_stylesheet_directory() . '/inc/tps/menu-homepage.php';
require_once get_stylesheet_directory() . '/inc/tps/open-graph-tags.php';
require_once get_stylesheet_directory() . '/inc/tps/rss-functions.php';
require_once get_stylesheet_directory() . '/inc/tps/rss-mailchimp.php';
require_once get_stylesheet_directory() . '/inc/tps/rss-template.php';

// WordPress
// =============================================================================

require_once get_stylesheet_directory() . '/inc/wp/akismet-empty-spam-queue-daily.php';
require_once get_stylesheet_directory() . '/inc/wp/comment-url-unset.php';
require_once get_stylesheet_directory() . '/inc/wp/dequeue-jquery-migrate.php';
require_once get_stylesheet_directory() . '/inc/wp/disable-self-pings.php';
require_once get_stylesheet_directory() . '/inc/wp/enable-link-manager.php';
require_once get_stylesheet_directory() . '/inc/wp/remove-emoji-support.php';
require_once get_stylesheet_directory() . '/inc/wp/remove-query-string.php';
require_once get_stylesheet_directory() . '/inc/wp/remove-tag-with-wp-version.php';

// Plugins
// =============================================================================

require_once get_stylesheet_directory() . '/inc/plugins/amp-analytics.php';

// One-liners
// =============================================================================

add_editor_style( 'css/editor-style.css' );
