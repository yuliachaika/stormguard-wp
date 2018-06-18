<?php
/**
 * Template part for displaying offers
 * Template post type: offers
 */

?>

<div class="three-col-img-link__item">

	<div class="three-col-img-link__img-wrap">
		<?php 

			$image = get_field('img');

				if( !empty($image) ): ?>

		    <img class="three-col-img-link__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
	</div>

		<?php 

			$link = get_field('link');

			if( $link ): ?>
				
				<a class="three-col-img-link__link" href="<?php echo $link; ?>"><?php the_title(); ?></a>

		<?php endif; ?>
	</div>
<!-- /.item  -->

