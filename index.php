<?php get_header(); ?>


<?php if( is_front_page() ) { ?>
<section class="hero" style="background-image: url(<?php
	if ( has_post_thumbnail()) {
		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		echo ''.$thumbnail_attributes[0] . '';
	}
	?>)">
	<div class="hero__container container">
		<div class="hero__content">
			<p class="hero__text">Does Your Home or Property Have <span>Storm Damage</span> or <span>Need an Update</span>?</p>
			<a href="#" class="hero__btn">Contact Us Today</a>
		</div>
	</div>
	<!-- /.container -->
	<?php } else { ?>
	<section class="hero hero__bg" style="background-image: url(<?php
		if ( has_post_thumbnail()) {
			$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			echo ''.$thumbnail_attributes[0] . '';
		}
		?>)">

		<?php } ?>
		<a href="<?php the_permalink() ?>"></a>
	</section>
	<!-- /.hero -->


	<main class="main">

		<?php get_template_part('search_form'); ?>

		<?php get_template_part('info'); ?>

		<?php get_template_part('offers'); ?>

		<?php get_template_part('slider'); ?>

		<?php get_template_part('posts'); ?>

		<section class="contact-form-gallery">
			<div class="container contact-form-gallery__container">
				<div class="contact-form-gallery__wrap">
					<div class="contact-form-gallery__contact contact-form">
						<div class="title-text">
							<h2 class="title-text__title title-text__title--white"><?php echo get_cat_name(8); ?></h2>
							<div class="title-text__text title-text__text--white"><?php echo category_description(8); ?></div>
						</div>
						<div class="contact-form__form form">
							<?php echo  do_shortcode('[contact-form-7 id="131" title="Contact form" html_class="form"]'); ?>
						</div>
						<!-- /form -->


					</div>
					<!-- /.contact-form -->

					<?php get_template_part('gallery'); ?>

				</div>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.contact-form-gallery -->

	</main>
	<!-- /main -->

	<?php get_footer(); ?>

