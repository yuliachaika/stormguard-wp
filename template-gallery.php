<?php
/*
Template Name: Template Gallery
*/
get_header(); ?>

<section class="hero hero__bg" style="background-image: url(<?php
    if ( has_post_thumbnail()) {
        $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
        echo ''.$thumbnail_attributes[0] . '';
    }
    ?>)">

<a href="<?php the_permalink() ?>"></a>
</section>
<!-- /.hero -->
<main class="main"></main>
<h1>dydggdgdgdgdgdgdgg</h1>
<div>

    <?php 
    $args = array(
        'post_type' => 'gallery',
        'publish' => true,
        'paged' => get_query_var('paged'),
        );

    query_posts($args);

    if ( have_posts() ) : ?>

    <?php
    while ( have_posts() ) :
        the_post();

    get_template_part( 'content/content-gallery', get_post_type() );

    endwhile;

    endif;
    ?>


</div>

<?php get_footer(); ?>