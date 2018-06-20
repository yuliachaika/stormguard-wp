<?php
/*
Template Name: gallery
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
  <section>
    <div class="container">
      <div class="title-text title-text--center">
        <h2 class="title-text__title title-text--center"><?php echo get_cat_name(11); ?></h2>
        <div class="title-text__text title-text__text--center"><?php echo category_description(11); ?></div>
      </div>
      <div class="gallery__wrap">
        <?php 
        $args = array(
          'post_type' => 'gallery',
          );

        query_posts($args);

        while(have_posts()){
          the_post(); ?>

          <div class="gallery__item gallery__item--wide" style="background-image: url(<?php 
            $image = get_field('image');
            if ( !empty($image)) {
              echo $image['url'];   
            }
            ?>)">
            <a href="<?php the_permalink(); ?>" class="gallery__link">
              <?php

              if( !empty($image) ): ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

          </a>

        </div>
        
        <?php }               
        ?>
      </div>     
      
    </div>
  </section>
  <!-- /gallery items -->
  
  <?php get_template_part('template-parts/search_form'); ?>

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

