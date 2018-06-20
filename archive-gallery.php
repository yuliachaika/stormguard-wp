<?php
/**
 * The template for displaying archive galleries
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

	<div class="container">
		<div class="archive archive__wrap">
			<div class="archive__left">
				
				<?php if ( have_posts() ) : ?>

					<div class="title-text title-text">
						<?php the_archive_title( '<h1 class="title-text__title">', '</h1>' ); ?>
					</div>

					<div class="gallery__wrap">

						<?php while ( have_posts() ) : the_post(); ?>

							<div class="gallery__item gallery__item--wide" style="background-image: url(<?php 
								$image = get_field('image');
								if ( !empty($image)) {
									echo $image['url'];   
								}
								?>)">
								<a href="<?php the_permalink(); ?>" class="gallery__link">
									<?php if( !empty($image) ): ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

									<?php endif; ?>
								</a>

							</div>
						<?php endwhile;
						endif;
						?>

					</div>
				</div>
				<!-- /left part -->
				<div class="archive__right">
					<div class="archive__tag">
						<p class="archive__text">By Name</p>
						<div class="archive__text archive__text--wrap">
							<?php wp_get_archives('type=postbypost&limit=20&format=custom&post_type=gallery'); ?>
						</div>
					</div>
					<div class="archive__tag">
						<p class="archive__text">By Month</p>
						<div class="archive__text archive__text--wrap">
							<ul>
								<?php wp_get_archives('type=monthly&post_type=gallery'); ?>
							</ul>
						</div>
					</div>		
				</div>
				<!-- /right part -->
			</div>
		</div>
		<!-- /.container -->
	</main>
	<!-- /main -->


	<?php get_footer(); ?>