<?php
/**
 * Template part for displaying offers section
 * Template post type: offers
 */

?>
<section class="main-offers">
	<div class="container">
		<div class="main-offers__title title-text title-text--center">
			<h2 class="title-text__title"><?php echo get_cat_name(5); ?></h2>
			<div class="title-text__text title-text__text--center"><?php echo category_description(5); ?></div>
		</div>
		<!-- /.title-text -->

		<div class="main-info__content three-col-img-link">
			<div class="three-col-img-link__wrap">
				<?php 
				$args = array(
					'post_type' => 'offers',
					);

				query_posts($args);

				while(have_posts()){
					the_post();
					get_template_part( 'content/content-offers', get_post_type() );
				}				
				?>

			</div>
		</div>
		<!-- /.three-col-img-link -->
	</div>
	<!-- /.container -->
</section>
	<!-- /.main-offers -->