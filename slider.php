<?php
/**
 * Template part for displaying slider section
 * Template post type: slider
 */

?>
<section class="main-slider slider">
	<div class="container">
		<h3 class="slider__title"><?php echo get_cat_name(6); ?></h3>
		<div class="slider__wrap">


			<?php 
			$args = array(
				'post_type' => 'slider',
				'publish' => true,
				'paged' => get_query_var('paged'),
				);

			query_posts($args);

			if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();

			get_template_part( 'content/content-slides', get_post_type() );

			endwhile;

			endif;
			?>


		</div>
		<!-- /.slider -->
		<nav class="slider__nav">
		</nav>
	</div>
	<!-- /.container -->
</section>
<!-- /.slider -->