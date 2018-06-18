<?php
/**
 * Template part for displaying slider
 * Template post type: slider
 */

?>
<div class="slider__slide">
	<div class="slider__slide-wrap">
		<p class="slider__text"><?php the_content(); ?></p>
		<p class="slider__info"><?php the_field('author'); ?></p>
		<p class="slider__info"><?php the_field('position'); ?></p>
	</div>
</div>
