<?php
/**
 * The template for displaying services single posts 
 */

get_header();
?>
<section class="hero hero__bg" style="background-image: url(<?php 
	$image = get_field('bg');
	if ( !empty($image)) {
		echo $image['url']; 	
	}
	?>)">

</section>
<!-- /.hero -->

<main class="main">
	<section class="main__breadcrumbs">
		<div class="container">
			<div class="breadcrumbs">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
						<p id="breadcrumbs">','</p>
						');
				}
				?>
			</div>
		</div>
	</section>
	<!-- /.breadcrumbs -->

	<section class="about">
		<div class="about__container container">
			<div class="about__wrap">
				<div class="about__left">
					<?php 

					$image = get_field('image');

					if( !empty($image) ): ?>

					<img class="about__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
			</div>
			<div class="about__right">
				<h2 class="about__title"><?php the_title(); ?></h2>
				<p class="about__text"><?php the_content(); ?></p>
			</div>
		</div>
	</div>
	<!-- /.container -->
</section>
<!-- /.about -->

<section class="main-info">
	<div class="container">
		<div class="main-info__title title-text title-text--center">
			<h2 class="title-text__title"><?= get_field('service_title', 'option'); ?></h2>
			<div class="title-text__text title-text__text--center"><?= get_field('services_descr', 'option'); ?></div>
		</div>
		<!-- /.title-text -->	
		<div class="main-info__content three-col-icon-info">
			<div class="three-col-icon-info__wrap">

				<?php 
				$args = array(
					'post_type' => 'service',
					'post__not_in' => array( $post->ID )
					);

				query_posts($args);

				while(have_posts()){
					the_post();
					get_template_part( 'content/content-services', get_post_type() );
				}				
				?>


			</div>

			<a class="three-col-icon-info__btn" href="<?php echo esc_url( home_url( '/services' ));?>"><?= get_field('services_btn', 'option'); ?></a> 
		</div>

	</div>
</section>
<!-- /.main-info -->

<?php get_template_part('template-parts/offers'); ?>

<?php get_template_part('template-parts/search_form'); ?>

<section class="contact-form-gallery">
	<div class="container contact-form-gallery__container">
		<div class="contact-form-gallery__wrap">
			<?php get_template_part('template-parts/contact-form'); ?>

			<?php get_template_part('template-parts/gallery'); ?>

		</div>
	</div>
	<!-- /.container -->
</section>
<!-- /.contact-form-gallery -->



</main>

<?php get_footer(); ?>