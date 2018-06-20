<?php
/**
 * The template for displaying gallery single posts
 */

get_header();
?>

<main>
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

<section class="contact-form-gallery">
	<div class="container contact-form-gallery__container">
		<div class="contact-form-gallery__wrap">
			<?php get_template_part('template-parts/contact-form'); ?>

		</div>
	</div>
	<!-- /.container -->
</section>
<!-- /.contact-form-gallery -->

</main>
<!-- /main -->
<?php get_footer(); ?>