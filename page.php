<?php
/**
 * The template for displaying all pages
 */

get_header();
?>
<section class="hero hero__bg" style="background-image: url(<?php
	if ( has_post_thumbnail()) {
		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		echo ''.$thumbnail_attributes[0] . '';
	}
	?>)">
	<a href="<?php the_permalink() ?>"></a>
</section>
<!-- /.hero -->
<main class="main">
	
	<section class="contact-form-gallery">
      <div class="container contact-form-gallery__container">
        <div class="contact-form-gallery__wrap">
          <?php get_template_part('contact-form'); ?>
          
          <?php get_template_part('gallery'); ?>

        </div>
      </div>
      <!-- /.container -->
  </section>
  <!-- /.contact-form-gallery -->
</main>
<?php get_footer(); ?>

