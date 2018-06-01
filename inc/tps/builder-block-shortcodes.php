<?php
/*
 * Blocks reference: https://forum.tagdiv.com/blocks/
 */

add_shortcode( 'tps_block_1', 'tps_block_1_shortcode' );
add_shortcode( 'tps_block_2', 'tps_block_2_shortcode' );
add_shortcode( 'tps_block_3', 'tps_block_3_shortcode' );
add_shortcode( 'tps_block_4', 'tps_block_4_shortcode' );
add_shortcode( 'tps_blog_page', 'tps_blog_page_shortcode' );

// Default query for posts
$post_query_args = array(
  'post_type'       => 'post',
  'post_status'     => 'publish',
  'posts_per_page'  => get_option('posts_per_page'),
  'orderby'         => 'date',
  'order'           => 'DESC',
);

/*
 * Based on TagDiv Block 13
 */
function tps_block_1_shortcode( $atts ) {
  global $post_query_args;

  $block = shortcode_atts( array(
    'posts' => null,
    'offset' => null
  ), $atts );

  if( ! is_null($block['posts']) ) $post_query_args['posts_per_page'] = $block['posts'];
  if( ! is_null($block['offset']) ) $post_query_args['offset'] = $block['offset'];

  $posts = new WP_Query( $post_query_args );

  $posts_html = array();

  if ( $posts->have_posts() ) {
    $posts_html[] = '<div class="tps-block tps-block-1">';

    while ( $posts->have_posts() ) {
      $posts->the_post();

      $post_id = get_the_ID();
      $post_format = get_post_format($post_id);
      $post_categories = get_the_category($post_id);

      $article_tag_classes = array();
      if( $post_format ) $article_tag_classes[] = "format-$post_format";
      if( has_post_thumbnail() ) $article_tag_classes[] = 'has-post-thumbnail';
      foreach ($post_categories as $category) {
        $article_tag_classes[] = 'category-' . $category->slug;
      }
      $article_tag_classes = implode(' ', $article_tag_classes);
      
      $posts_html[] = tps_module_1($post_id, $article_tag_classes);
    }
    $posts_html[] = '</div><!-- .tps-block-1 -->';
  }
  else {
    $posts_html[] = tps_module_no_posts();
  }

  $html = implode('', $posts_html);

  return $html;

  wp_reset_postdata();
}

/*
 * Based on TagDiv Block 12
 */
function tps_block_2_shortcode( $atts ) {
  global $post_query_args;

  $block = shortcode_atts( array(
    'posts' => null,
    'offset' => null
  ), $atts );

  if( ! is_null($block['posts']) ) $post_query_args['posts_per_page'] = $block['posts'];
  if( ! is_null($block['offset']) ) $post_query_args['offset'] = $block['offset'];

  $posts = new WP_Query( $post_query_args );

  $posts_html = array();

  if ( $posts->have_posts() ) {
    $posts_html[] = '<div class="tps-block tps-block-2">';

    while ( $posts->have_posts() ) {
      $posts->the_post();

      $post_id = get_the_ID();
      $post_format = get_post_format($post_id);
      $post_categories = get_the_category($post_id);

      $article_tag_classes = array();
      if( $post_format ) $article_tag_classes[] = "format-$post_format";
      if( has_post_thumbnail() ) $article_tag_classes[] = 'has-post-thumbnail';
      foreach ($post_categories as $category) {
        $article_tag_classes[] = 'category-' . $category->slug;
      }
      $article_tag_classes = implode(' ', $article_tag_classes);
      
      $posts_html[] = tps_module_2($post_id, $article_tag_classes);
    }
    $posts_html[] = '</div><!-- .tps-block-2 -->';
  }
  else {
    $posts_html[] = tps_module_no_posts();
  }

  $html = implode('', $posts_html);

  return $html;

  wp_reset_postdata();
}

/*
 * Based on TagDiv Block 6
 */
function tps_block_3_shortcode( $atts ) {
  global $post_query_args;

  $block = shortcode_atts( array(
    'posts' => null,
    'offset' => null
  ), $atts );

  if( ! is_null($block['posts']) ) $post_query_args['posts_per_page'] = $block['posts'];
  if( ! is_null($block['offset']) ) $post_query_args['offset'] = $block['offset'];

  $posts = new WP_Query( $post_query_args );

  $posts_html = array();

  if ( $posts->have_posts() ) {
    $posts_html[] = '<div class="tps-block tps-block-3">';

    while ( $posts->have_posts() ) {
      $posts->the_post();

      $post_id = get_the_ID();
      $post_format = get_post_format($post_id);
      $post_categories = get_the_category($post_id);

      $article_tag_classes = array();
      if( $post_format ) $article_tag_classes[] = "format-$post_format";
      if( has_post_thumbnail() ) $article_tag_classes[] = 'has-post-thumbnail';
      foreach ($post_categories as $category) {
        $article_tag_classes[] = 'category-' . $category->slug;
      }
      $article_tag_classes = implode(' ', $article_tag_classes);
      
      $posts_html[] = tps_module_3($post_id, $article_tag_classes);
    }
    $posts_html[] = '</div><!-- .tps-block-3 -->';
  }
  else {
    $posts_html[] = tps_module_no_posts();
  }

  $html = implode('', $posts_html);

  return $html;

  wp_reset_postdata();
}

/*
 * Based on TagDiv Block 9
 */
function tps_block_4_shortcode( $atts ) {
  global $post_query_args;

  $block = shortcode_atts( array(
    'posts' => null,
    'offset' => null
  ), $atts );

  if( ! is_null($block['posts']) ) $post_query_args['posts_per_page'] = $block['posts'];
  if( ! is_null($block['offset']) ) $post_query_args['offset'] = $block['offset'];

  $posts = new WP_Query( $post_query_args );

  $posts_html = array();

  if ( $posts->have_posts() ) {
    $posts_html[] = '<div class="tps-block tps-block-4">';

    while ( $posts->have_posts() ) {
      $posts->the_post();

      $post_id = get_the_ID();
      $post_format = get_post_format($post_id);
      $post_categories = get_the_category($post_id);

      $article_tag_classes = array();
      if( $post_format ) $article_tag_classes[] = "format-$post_format";
      if( has_post_thumbnail() ) $article_tag_classes[] = 'has-post-thumbnail';
      foreach ($post_categories as $category) {
        $article_tag_classes[] = 'category-' . $category->slug;
      }
      $article_tag_classes = implode(' ', $article_tag_classes);
      
      $posts_html[] = tps_module_4($post_id, $article_tag_classes);
    }
    $posts_html[] = '</div><!-- .tps-block-4 -->';
  }
  else {
    $posts_html[] = tps_module_no_posts();
  }

  $html = implode('', $posts_html);

  return $html;

  wp_reset_postdata();
}

/*
 * Blog page has it's own shortcode
 * because it has to deal with pagination
 */
function tps_blog_page_shortcode() {
  global $post_query_args;

  if ( get_query_var('paged') ) { $post_query_args['paged'] = get_query_var( 'paged' ); }

  $posts = new WP_Query( $post_query_args );

  $posts_html = array();

  if ( $posts->have_posts() ) {
    $posts_html[] = '<div class="tps-block tps-blog-page">';

    $count = 0;
    while ( $posts->have_posts() ) {
      $posts->the_post();

      $post_id = get_the_ID();
      $post_format = get_post_format($post_id);
      $post_categories = get_the_category($post_id);

      $article_tag_classes = array();
      if( $post_format ) $article_tag_classes[] = "format-$post_format";
      if( has_post_thumbnail() ) $article_tag_classes[] = 'has-post-thumbnail';
      foreach ($post_categories as $category) {
        $article_tag_classes[] = 'category-' . $category->slug;
      }
      $article_tag_classes = implode(' ', $article_tag_classes);

      ob_start();

      if( $posts->get('paged') == 0 && $posts->current_post == 0 ) {
        $posts_html[] = tps_module_1($post_id, $article_tag_classes);
      }
      else {
        $count++;
        
        $posts_html[] = tps_module_3($post_id, $article_tag_classes);
        
        if( $count == 2 ) {
          $posts_html[] = '<div class="tps-float-breaker"></div>';
          $count = 0;
        }
      }
    }

    $posts_html[] = '</div><!-- .tps-blog-page -->';
  }
  else {
    $posts_html[] = tps_module_no_posts();
  }

  $html = implode('', $posts_html);

  return $html;

  wp_reset_postdata();
}
