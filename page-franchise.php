<?php
/**
 * Template Name: franchise
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
  <section class="text-img">
    <div class="text-img__container container">
      <div class="text-img__float">
        <?php 

        $image = get_field('image');
        if( !empty($image) ): ?>
        <img class="text-img__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>
    </div>

    <p class="about__text"><?php the_field('content'); ?></p>
  </div>
  <!-- /.container -->
</section>
<!-- /.text-img -->
<?php get_template_part('template-parts/search_form_submit'); ?>
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

