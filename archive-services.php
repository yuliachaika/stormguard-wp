<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

	<main class="main">

		<?php 
		$args = array(
                   'post_type' => 'services',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
               );
            
            query_posts($args);

		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-services', get_post_type() );

			endwhile;

			// the_posts_navigation();

		// else :

			// get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->

<?php
get_footer();
