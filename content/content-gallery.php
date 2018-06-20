<?php
/**
 * Template part for displaying gallery
 * Template post type: gallery
 */

?>

<div class="gallery__item" style="background-image: url(<?php 
   $image = get_field('image');
    if ( !empty($image)) {
      echo $image['url'];   
    }
  ?>)">
	<a href="<?php the_permalink(); ?>" class="gallery__link">
		<?php 

		$image = get_field('image');

		if( !empty($image) ): ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>

	</a>
</div>

