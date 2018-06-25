<?php
/**
 * The template for displaying all single posts
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
					<a href="<?php the_permalink(); ?>" class="post-img__img">
						<?php echo get_the_post_thumbnail(); ?>
					</a>
				</div>
				<div class="about__right">
					<h2 class="about__title"><?php the_title(); ?></h2>
					<?php 

					$author = get_field('author');

					if( !empty($author) ): ?>

					<p class="about__info about__info--author"><?php the_author(); ?></p>
					
				<?php endif; ?>
				<p class="about__info about__text"><?php the_time('F j, Y'); ?></p>


				<p class="about__text"><?php the_content(); ?></p>
			</div>
		</div>
	</div>
	<!-- /.container -->
</section>
<!-- /.about -->

</main>

<?php get_footer(); ?>





