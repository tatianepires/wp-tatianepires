<?php
/**
 * Displays header media
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php
      if( is_front_page() ) the_custom_header_markup();
      else echo tps_custom_header_markup();
      ?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
