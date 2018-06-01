<?php
/**
 * Template part for displaying posts in archive list
 */

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

echo tps_module_5($post_id, $article_tag_classes);
?>
