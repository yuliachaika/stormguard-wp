<?php
/**
 * Template part for displaying services
 * Template post type: services
 */

?>

<div class="three-col-icon-info__item">
	<a href="<?php the_permalink(); ?>" class="three-col-icon-info__img">

		<?php 

		$image = get_field('icon');

		if( !empty($image) ): ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>
</a>
<div class="three-col-icon-info__info">
	<a href="<?php the_permalink( ); ?>" class="">
		<h3 class="three-col-icon-info__title"><?php the_title(); ?></h3>
	</a>
	<p class="three-col-icon-info__text"><?php the_field('description'); ?></p>
</div>
</div>

