<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

<main>
	<div class="container">
		<div class="archive archive__wrap">
			<div class="archive__left">
				<?php if ( have_posts() ) : ?>

					<div class="title-text title-text">
						<?php
						the_archive_title( '<h1 class="title-text__title">', '</h1>' );
						?>
					</div>

					<?php
					while ( have_posts() ) : the_post(); ?>

					<div class="archive__item">
						<a href="<?php the_permalink(); ?>" class="archive__icon">

							<?php 

							$image = get_field('icon');

							if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>
					</a>
					<div class="three-col-icon-info__info archive__info">
						<a href="<?php the_permalink( ); ?>" class="">
							<h3 class="three-col-icon-info__title three-col-icon-info__title--archive"><?php the_title(); ?></h3>
							<p class="three-col-icon-info__text three-col-icon-info__text--archive"><?php the_field('description'); ?></p>
						</a>
					</div>
				</div>

			<?php endwhile;
			endif;
			?>
		</div>
		<!-- /left part -->
		<div class="archive__right">
			<div class="archive__tag">
				<p class="archive__text">By Name</p>
				<div class="archive__text archive__text--wrap">
					<?php wp_get_archives('type=postbypost&limit=20&format=custom&post_type=service'); ?>
				</div>
			</div>
			<div class="archive__tag">
				<p class="archive__text">By Month</p>
				<div class="archive__text archive__text--wrap">
					<ul>
						<?php wp_get_archives('type=monthly&post_type=service'); ?>
					</ul>
				</div>
			</div>		
		</div>
		<!-- /right part -->
	</div>

</div>
<!-- /.container -->
</main><!-- .site-main -->

<?php
get_footer();
