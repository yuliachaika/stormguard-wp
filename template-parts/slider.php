<?php
/**
 * Template part for displaying review section
 * Template post type: review
 */

?>
<section class="main-slider slider">
	<div class="container">
		<h3 class="slider__title"><?= get_field('reviews_title', 'option'); ?></h3>
		<div class="slider__wrap">


			<?php 
			$args = array(
				'post_type' => 'review',
				'publish' => true,
				);

			query_posts($args);

			while(have_posts()){
				the_post();
				get_template_part( 'content/content-reviews', get_post_type() );
			}               
			?>

		</div>
		<!-- /.slider -->
		<nav class="slider__nav">
		</nav>
	</div>
	<!-- /.container -->
</section>
<!-- /.slider -->