<?php
/**
 * Template part for displaying services section
 * Template post type: services
 */

?>
<section class="main-info">
	<div class="container">
		<div class="main-info__title title-text title-text--center">
			<h2 class="title-text__title"><?php echo get_cat_name(4); ?></h2>
			<div class="title-text__text title-text__text--center"><?php echo category_description(4); ?></div>
		</div>
		<!-- /.title-text -->	
		<div class="main-info__content three-col-icon-info">
			<div class="three-col-icon-info__wrap">

				<?php 
				$args = array(
					'post_type' => 'service',
					);

				query_posts($args);

				while(have_posts()){
					the_post();
					get_template_part( 'content/content-services', get_post_type() );
				}				
				?>

			</div>

			<a class="three-col-icon-info__btn" href="<?php echo esc_url( home_url( '/services' ));?>">View All Services</a> 
		</div>

	</div>
</section>
<!-- /.main-info -->