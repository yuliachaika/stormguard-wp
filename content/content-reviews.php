<?php
/**
 * Template part for displaying review
 * Template post type: review
 */

?>
<div class="slider__slide">
	<div class="slider__slide-wrap">
		<div class="slider__text"><?php the_content(); ?></div>
		<p class="slider__info"><?php the_field('author'); ?></p>
		<p class="slider__info"><?php the_field('position'); ?></p>
	</div>
</div>
