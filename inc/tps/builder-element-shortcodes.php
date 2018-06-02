<?php
add_shortcode( 'tps_title', 'tps_title_shortcode' );
add_shortcode( 'tps_button', 'tps_button_shortcode' );
add_shortcode( 'tps_quote', 'tps_quote_shortcode' );

$css = array(
  'main-color' => '#552746',
  'main-color-hover' => '#913f77',
);

function tps_title_shortcode( $atts, $content = null ) {
  if( is_null($content) ) return;

  global $css;

  $title = shortcode_atts( array(
    'heading' => 'h2',
    'text-align' => 'center',
    'color' => null,
    'class' => null,
  ), $atts );

  if( is_null($title['color']) ) $title['color'] = $css['main-color'];

  if( is_null($title['class']) ) $title['class'] = '';
  else $title['class'] = sprintf('class="%s"', $title['class']);

  $title_code = sprintf('<%s %s style="color:%s; text-align:%s;">%s</%s>', 
    $title['heading'], $title['class'], $title['color'], $title['text-align'], $content, $title['heading']
  );

  return $title_code;
}

function tps_button_shortcode( $atts, $content = null ) {
  if( is_null($content) ) return;

  global $css;

  $button = shortcode_atts( array(
    'url' => null,
    'text-align' => 'left',
    'background-color' => null,
    'color' => null,
    'icon' => null, // font awesome icon fa-NAME
    'class' => null,
  ), $atts );

  if( is_null($button['url']) ) return;

  if( is_null($button['class']) ) $button['class'] = '';
  else $button['class'] = sprintf('class="%s"', $button['class']);

  if( is_null($button['icon']) ) $button['icon'] = '';
  else $button['icon'] = sprintf('<i class="fa fa-%s"></i> ', $button['icon']);

  if( is_null($button['background-color']) ) $button['background-color'] = $css['main-color'];
  if( is_null($button['color']) ) $button['color'] = '#fff';

  $button_code = sprintf('<div style="text-align:%s;"><a href="%s" %s style="display:inline-block; background-color:%s; color:%s; border-radius:5px; padding:8px 16px;">%s%s</a></div>',
    $button['text-align'], $button['url'], $button['class'], $button['background-color'], $button['color'], $button['icon'], $content
  );

  return $button_code;
}

/*
 * tps_quote() is for homepage blocks, DON'T use inside posts
 */
function tps_quote_shortcode( $atts, $content = null ) {
  if( is_null($content) ) return;

  global $css;

  $quote = shortcode_atts( array(
    'color' => null,
    'text-align' => 'center',
  ), $atts );

  if( is_null($quote['color']) ) $quote['color'] = $css['main-color'];

  $quote_code = sprintf('<div style="color:%s; font-family:\'Dancing Script\', cursive, serif; font-size:2.4rem; text-align:%s;">%s</div>',
    $quote['color'], $quote['text-align'], $content
  );

  return $quote_code;
}