<?php
/**
 * Template part for displaying posts
 * Template post type: post
 */

?>

<div class="posts-block__item post">
	<div class="post-img__wrap">
		<a href="<?php the_permalink(); ?>" class="post-img__img">
			<?php echo get_the_post_thumbnail(); ?>
		</a>
		<div class="post-img__info">
			<span><?php the_time('M'); ?></span>
			<span class="post-img__text"><?php the_time('d'); ?></span>
		</div>
	</div>
	<div class="post__content">
		<a href="<?php the_permalink( ); ?>" class="">
			<h2 class="post__title"><?php the_title(); ?></h2>
		</a>
		<div class="post__text"><?php the_content('read more'); ?></div>
	</div>

		<p class="post__author">By&nbsp;<?php the_author(); ?></p>
	
</div>
<!-- /. post -->

