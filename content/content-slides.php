<?php
/**
 * Template part for displaying slider
 * Template post type: slider
 */

?>
<div class="slider__slide">
	<div class="slider__slide-wrap">
		<div class="slider__text"><?php the_content(); ?></div>
		<p class="slider__info"><?php the_field('author'); ?></p>
		<p class="slider__info"><?php the_field('position'); ?></p>
	</div>
</div>
