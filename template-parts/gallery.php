<?php
/**
 * Template part for displaying gallery section
 * Template post type: gallery
 */
global $tname;
?>

<div class="contact-form-gallery__gallery gallery">
	<div class="title-text">
		<h2 class="title-text__title title-text__title--white"><?= get_field('gallery_title', 'option'); ?></h2>
		<div class="title-text__text title-text__text--white">
			<?php 
					if( isset($tname) && $tname === 'front-page')  {
						the_field('gallery_home_descr', 22); 
					} else {
						?>
							<?= get_field('gallery_descr', 'option'); ?>&nbsp;<a href="<?= get_field('gallery_link', 'option'); ?>" class="title-text__text title-text__text--link"><?= get_field('gallery_text', 'option'); ?></a>
						<?php
				}?> 
				
			
		</div>
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
			<?php 
					if( isset($tname) && $tname === 'front-page')  {
						?>
						<a class="gallery__btn" href="<?php echo esc_url( home_url( '/galleries' ));?>"><?php the_field('gallery_btn', 22);  ?></a>
						<?php
					}?> 
		
	</div>
</div>
<!-- /.gallery -->