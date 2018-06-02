<?php
/*
 * Functions used by block shortcodes in The Loop
 */

function tps_module_1($post_id, $article_classes) {
  ob_start();
  ?>
  <article id="<?php echo $post_id; ?>" class="post-<?php echo $post_id; ?> post tps-module tps-module-1 type-post status-publish hentry <?php echo $article_classes; ?>">
    <?php if( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <a href="<?php echo get_the_permalink($post_id); ?>">
        <?php 
        $thumb_id = get_post_thumbnail_id($post_id); 
        $thumb_src = wp_get_attachment_image_src($thumb_id, 'large');
        $thumb_srcset = wp_get_attachment_image_srcset($thumb_id, 'large');
        printf('<img src="%s" width="%d" height="%d" class="attachment-large size-large wp-post-image" alt srcset="%s" data-attachment-id="%s" data-permalink="%s" style="width:inherit;">', $thumb_src[0], $thumb_src[1], $thumb_src[2], $thumb_srcset, $thumb_id, get_the_permalink($thumb_id));
        ?>
      </a>
    </div>
    <?php } ?>
    <header class="entry-header">
      <h2 class="entry-title">
        <?php printf('<a href="%s" rel="bookmark">%s</a>', get_the_permalink($post_id), get_the_title($post_id)); ?>    
      </h2>
      <div class="entry-meta"><?php echo tps_entry_date(); ?></div>
    </header>
    <div class="entry-content">
      <?php echo tps_excerpt($post_id); ?>
    </div>
  </article>
  <?php
  $html = ob_get_clean();

  return $html;
}

function tps_module_2($post_id, $article_classes) {
  ob_start();
  ?>
  <article id="<?php echo $post_id; ?>" class="post-<?php echo $post_id; ?> post tps-module tps-module-2 type-post status-publish hentry <?php echo $article_classes; ?>">
    <?php if( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <a href="<?php echo get_the_permalink($post_id); ?>">
        <?php 
        $thumb_id = get_post_thumbnail_id($post_id); 
        $thumb_src = wp_get_attachment_image_src($thumb_id, 'medium');
        $thumb_srcset = wp_get_attachment_image_srcset($thumb_id, 'medium');
        printf('<img src="%s" width="%d" height="%d" class="attachment-medium size-medium wp-post-image" alt srcset="%s" data-attachment-id="%s" data-permalink="%s">', $thumb_src[0], $thumb_src[1], $thumb_src[2], $thumb_srcset, $thumb_id, get_the_permalink($thumb_id));
        ?>
      </a>
    </div>
    <div class="tps-module-2-content">
      <header class="entry-header">
        <h2 class="entry-title">
          <?php printf('<a href="%s" rel="bookmark">%s</a>', get_the_permalink($post_id), get_the_title($post_id)); ?>    
        </h2>
        <div class="entry-meta"><?php echo tps_entry_date(); ?></div>
      </header>
      <div class="entry-content">
        <?php echo tps_excerpt($post_id); ?>
      </div>
    </div>
    <?php }
    else { ?>
    <header class="entry-header">
      <h2 class="entry-title">
        <?php printf('<a href="%s" rel="bookmark">%s</a>', get_the_permalink($post_id), get_the_title($post_id)); ?>    
      </h2>
      <div class="entry-meta"><?php echo tps_entry_date(); ?></div>
    </header>
    <div class="entry-content">
      <?php echo tps_excerpt($post_id); ?>
    </div>
    <?php } ?>
  </article>
  <?php
  $html = ob_get_clean();

  return $html;
}

function tps_module_3($post_id, $article_classes) {
  ob_start();
  ?>
  <article id="<?php echo $post_id; ?>" class="post-<?php echo $post_id; ?> post tps-module tps-module-3 type-post status-publish hentry <?php echo $article_classes; ?>">
    <header class="entry-header">
      <h2 class="entry-title">
        <?php printf('<a href="%s" rel="bookmark">%s</a>', get_the_permalink($post_id), get_the_title($post_id)); ?>    
      </h2>
      <div class="entry-meta"><?php echo tps_entry_date(); ?></div>
    </header>
    <?php if( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <a href="<?php echo get_the_permalink($post_id); ?>">
        <?php 
        $thumb_id = get_post_thumbnail_id($post_id); 
        $thumb_src = wp_get_attachment_image_src($thumb_id, 'medium');
        $thumb_srcset = wp_get_attachment_image_srcset($thumb_id, 'medium');
        printf('<img src="%s" width="%d" height="%d" class="attachment-medium size-medium wp-post-image" alt srcset="%s" data-attachment-id="%s" data-permalink="%s">', $thumb_src[0], $thumb_src[1], $thumb_src[2], $thumb_srcset, $thumb_id, get_the_permalink($thumb_id));
        ?>
      </a>
    </div>
    <?php } ?>
    <div class="entry-content">
      <?php echo tps_excerpt($post_id); ?>
    </div>
  </article>
  <?php
  $html = ob_get_clean();

  return $html;
}

function tps_module_4($post_id, $article_classes) {
  ob_start();
  ?>
  <article id="<?php echo $post_id; ?>" class="post-<?php echo $post_id; ?> post tps-module tps-module-4 type-post status-publish hentry <?php echo $article_classes; ?>">
    <header class="entry-header">
      <h2 class="entry-title">
        <?php printf('<a href="%s" rel="bookmark">%s</a>', get_the_permalink($post_id), get_the_title($post_id)); ?>    
      </h2>
      <div class="entry-meta"><?php echo tps_entry_date(); ?></div>
    </header>
  </article>
  <?php
  $html = ob_get_clean();

  return $html;
}

function tps_module_5($post_id, $article_classes) {
  // Slith variation of module 2
  ob_start();
  ?>
  <article id="<?php echo $post_id; ?>" class="post-<?php echo $post_id; ?> post tps-module tps-module-5 type-post status-publish hentry <?php echo $article_classes; ?>">
    <header class="entry-header">
      <h2 class="entry-title">
        <?php printf('<a href="%s" rel="bookmark">%s</a>', get_the_permalink($post_id), get_the_title($post_id)); ?>    
      </h2>
      <div class="entry-meta"><?php echo tps_entry_date(); ?></div>
    </header>
    <?php if( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <a href="<?php echo get_the_permalink($post_id); ?>">
        <?php 
        $thumb_id = get_post_thumbnail_id($post_id); 
        $thumb_src = wp_get_attachment_image_src($thumb_id, 'medium');
        $thumb_srcset = wp_get_attachment_image_srcset($thumb_id, 'medium');
        printf('<img src="%s" width="%d" height="%d" class="attachment-medium size-medium wp-post-image" alt srcset="%s" data-attachment-id="%s" data-permalink="%s">', $thumb_src[0], $thumb_src[1], $thumb_src[2], $thumb_srcset, $thumb_id, get_the_permalink($thumb_id));
        ?>
      </a>
    </div>
    <div class="tps-module-5-content">
      <div class="entry-content">
        <?php echo tps_excerpt($post_id); ?>
      </div>
    </div>
    <?php }
    else { ?>
    <div class="entry-content">
      <?php echo tps_excerpt($post_id); ?>
    </div>
    <?php } ?>
  </article>
  <?php
  $html = ob_get_clean();

  return $html;
}

function tps_module_no_posts() {
  ob_start();
  ?>
  <article class="post type-post status-publish hentry">
    <header class="entry-header">
      <h2 class="entry-title">Nada encontrado</h2>
      <p>Aparentemente não pudemos encontrar o que você está procurando. Talvez uma busca ajude.</p>
    </header>
  </article>
  <?php
  $html = ob_get_clean();

  return $html;
}

/*
 * Helper functions
 */

function tps_excerpt($post_id) {
  $read_more = sprintf('<br><a href="%s">Continue lendo &raquo;</a>', get_the_permalink($post_id));
  $excerpt = get_the_excerpt($post_id) . $read_more;
  
  return $excerpt;
}

// twentyseventeen_time_link()
function tps_entry_date() {
  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
  if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
  }

  $time_string = sprintf(
    $time_string,
    get_the_date( DATE_W3C ),
    get_the_date(),
    get_the_modified_date( DATE_W3C ),
    get_the_modified_date()
  );

  // Wrap the time string in a link, and preface it with 'Posted on'.
  return sprintf(
    /* translators: %s: post date */
    __( '<span class="screen-reader-text">Posted on</span> %s', 'twentyseventeen' ),
    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
  );
}

function tps_pagination($query) {
  $big = 999999999; // need an unlikely integer
  $pagination_html = '';

  if( $query->max_num_pages > 1 ) {
    $pages = paginate_links(
      array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $query->max_num_pages,
        'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
        'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
      )
    );

    ob_start();
    ?>
    <nav class="navigation pagination" role="navigation">
      <h2 class="screen-reader-text">Navegação por posts</h2>
      <div class="nav-links">
        <?php echo $pages; ?>
      </div>
    </nav>
    <?php
    $pagination_html = ob_get_clean();
  }

  return $pagination_html;
}
