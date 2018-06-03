<?php
/*
 * Plugin Name: Add Open Graph tags
 * Description: OG tags done my way
 * Author: Tatiane Pires
 * Author URI: http://tatianepires.com.br
 * Version: 1.0
 */

/**
 * Disable Jetpack's OG tags
 * Add the following line to functions.php
 */
add_filter( 'jetpack_enable_open_graph', '__return_false' );

function tps_open_graph_tags() {
    
  $blog_name = get_bloginfo('name');
  $blog_desc = get_bloginfo('description');
  $url = site_url();
  $blog_img = get_stylesheet_directory_uri().'/img/open-graph-default.jpg';
  $blog_img_w = 660;
  $blog_img_h = 300;
  
  echo '<meta property="og:locale" content="pt_BR" />';

  if( is_front_page() || is_home() || is_page() ) {
    if( is_page(array('blog')) ) $blog_desc = 'Todos os posts do blog.';
    elseif( is_page(array('tatiane-pires')) ) $blog_desc = 'Desenvolvedora web, blogueira, ciclista, corredora, gremista.';
    elseif( is_page(array('contato')) ) $blog_desc = 'Envie sua mensagem.';

    echo '<!-- Open Graph tags -->';
    echo '<meta property="og:type" content="website" />';
    printf('<meta property="og:title" content="%s" />', $blog_name);
    printf('<meta property="og:description" content="%s" />', $blog_desc);
    printf('<meta property="og:url" content="%s" />', $url);
    printf('<meta property="og:site_name" content="%s" />', $blog_name);
    printf('<meta property="og:image" content="%s" />', $blog_img);
    
    echo '<!-- Twitter tags -->';
    echo '<meta name="twitter:card" content="summary">';
    echo '<meta name="twitter:site" content="@tatianepires">';
    echo '<meta name="twitter:creator" content="@tatianepires">';
    printf('<meta name="twitter:title" content="%s">', $blog_name);
    printf('<meta name="twitter:description" content="%s">', $blog_desc);
    printf('<meta name="twitter:image" content="%s">', $blog_img);
  }
  
  if( is_single() ) {
    global $post;
    
    $post_url = get_permalink($post->ID);
    $post_excerpt = get_the_excerpt($post->ID);

    if( has_post_thumbnail($post->ID) ) {
      $thumb_id = get_post_thumbnail_id($post->ID);
      $post_img = wp_get_attachment_image_src($thumb_id, 'medium');
    }
    else {
      $post_img = array($blog_img, $blog_img_w, $blog_img_h);
    }
    
    echo '<!-- Open Graph tags -->';
    echo '<meta property="og:type" content="article" />';
    printf('<meta property="og:title" content="%s" />', $post->post_title);
    printf('<meta property="og:url" content="%s" />', $post_url);
    printf('<meta property="og:description" content="%s" />', $post_excerpt);
    printf('<meta property="og:site_name" content="%s" />', $blog_name);
    printf('<meta property="og:image" content="%s" />', $post_img[0]);
    printf('<meta property="og:image:width" content="%d" />', $post_img[1]);
    printf('<meta property="og:image:height" content="%d" />', $post_img[2]);
    
    echo '<!-- Twitter tags -->';
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:site" content="@tatianepires">';
    echo '<meta name="twitter:creator" content="@tatianepires">';
    printf('<meta name="twitter:title" content="%s">', $post->post_title);
    printf('<meta name="twitter:description" content="%s">', $post_excerpt);
    printf('<meta property="twitter:image" content="%s" />', $post_img[0]);
  }

  if( is_search() ) {
    $search = get_search_query();
    $query = str_replace(' ', '+', $search);
    $description = 'Resultados da pesquisa por: '.$search;

    echo '<!-- Open Graph tags -->';
    echo '<meta property="og:type" content="website" />';
    printf('<meta property="og:title" content="%s" />', $blog_name);
    printf('<meta property="og:description" content="%s" />', $description);
    printf('<meta property="og:url" content="%s/search/%s" />', $url, $query);
    printf('<meta property="og:site_name" content="%s" />', $blog_name);
    printf('<meta property="og:image" content="%s" />', $blog_img);
  }

  if( is_archive() ) {
      if( is_category() ) { $description = sprintf( __( 'Category: %s' ), single_cat_title( '', false ) ); }
      elseif ( is_tag() ) { $description = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) ); }
      elseif ( is_year() ) { $description = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) ); }
      elseif ( is_month() ) { $description = sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) ); }
      elseif ( is_day() ) { $description = sprintf( __( 'Day: %s' ), get_the_date( _x( 'd F Y', 'daily archives date format' ) ) ); }
      else { $description = 'Arquivos do blog'; }

      echo '<!-- Open Graph tags -->';
      echo '<meta property="og:type" content="website" />';
      echo '<meta property="og:title" content="'.$blog_name.'" />';
      echo '<meta property="og:description" content="'.$description.'" />';
      echo '<meta property="og:url" content="'.$url.'" />';
      echo '<meta property="og:site_name" content="'.$blog_name.'" />';
      echo '<meta property="og:image" content="'.$blog_img.'" />';
  }
}
add_action('wp_head', 'tps_open_graph_tags');
