<?php
/*
The template for displaying home page
*/
get_header(); 
$tname = 'front-page';
?>
<section class="hero" style="background-image: url(<?php
	if ( has_post_thumbnail()) {
		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		echo ''.$thumbnail_attributes[0] . '';
	}
	?>)">
	<div class="hero__container container">
		<div class="hero__content">
			<?= get_field('hero_text', 22); ?>
			<a href="<?= get_field('hero_link_url', 22); ?>" class="hero__btn"><?= get_field('hero_link', 22); ?></a>
		</div>
	</div>
	<!-- /.container -->
	<a href="<?php the_permalink() ?>"></a>
</section>
<!-- /.hero -->


<main class="main">

	<?php get_template_part('template-parts/search_form'); ?>

	<?php get_template_part('template-parts/info'); ?>

	<?php get_template_part('template-parts/offers'); ?>

	<?php get_template_part('template-parts/slider'); ?>

	<?php get_template_part('template-parts/posts'); ?>

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
<!-- /main -->

<?php get_footer(); ?>

