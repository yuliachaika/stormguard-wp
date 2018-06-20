<?php get_header(); ?>

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

	<?php get_template_part('template-parts/search_form'); ?>

	<?php get_template_part('template-parts/info'); ?>

	<?php get_template_part('template-parts/offers'); ?>

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

