<?php
/**
 * Template part for displaying gallery section
 * Template post type: gallery
 */

?>

<div class="contact-form-gallery__gallery gallery">
	<div class="title-text">
		<h2 class="title-text__title title-text__title--white"><?php echo get_cat_name(9); ?></h2>
		<div class="title-text__text title-text__text--white"><?php echo category_description(9); ?></div>
	</div>
	<div class="gallery__content">
		<div class="gallery__wrap">

			<?php 
			$args = array(
				'post_type' => 'gallery',
				'posts_per_page' => 8,
				);

			query_posts($args);

			if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();

			get_template_part( 'content/content-gallery', get_post_type() );

			endwhile;

			endif;
			?>


		</div>
		<a class="gallery__btn" href="<?php echo esc_url( home_url( '/galleries' ));?>">View more photos</a>
	</div>
</div>
<!-- /.gallery -->