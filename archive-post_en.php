<?php
/**
 * The template for displaying archive pages of post_en custom post type
 */

get_header(); ?>

<div class="wrap">
	<?php if ( have_posts() ) { ?>
		<header class="entry-header page-header">
			<?php post_type_archive_title( '<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

	    	<div class="tps-block tps-blog-page">
				<?php
  			global $wp_query;
	    	
	    	$count = 0;

				while ( have_posts() ) {
					the_post();

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

		      if( $wp_query->get('paged') == 0 && $wp_query->current_post == 0 ) {
		        echo tps_module_1($post_id, $article_tag_classes);
		      }
		      else {
		        $count++;
		        
		        echo tps_module_3($post_id, $article_tag_classes);
		        
		        if( $count == 2 ) {
		          echo '<div class="tps-float-breaker"></div>';
		          $count = 0;
		        }
		      }

				} // End of the loop.
				?>
				</div><!-- .tps-blog-page -->
				<?php
	    	echo tps_pagination($wp_query);
				?>
			<?php 
			 ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	<?php 
	}
	else {
		get_template_part( 'template-parts/post/content', 'none' );
	} ?>
</div><!-- .wrap -->

<?php
get_footer();
