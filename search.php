<?php
/**
 * The template for displaying search results pages
 */

get_header();
?>

<main class="main__search">
	<div class="container">
		<h1 class="title-text__title">
			<?php printf( esc_html__( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<a class="text-img__link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
			<?php the_content(''); ?>
			<?php endwhile; else: ?>
				<p class="title-text__text"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?></p>
			<?php
			get_search_form();
			the_widget( 'WP_Widget_Recent_Posts' );
		endif;?>
	</div>
	<!-- /.container -->
</main>
<!-- /main -->

<?php get_footer(); ?>


