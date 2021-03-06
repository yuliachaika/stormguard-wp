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
        <h2 class="about__title"><?php the_title(); ?></h2>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about -->
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

