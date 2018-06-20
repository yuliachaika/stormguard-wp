<?php
/**
 * The template for displaying Category
 */

get_header(); ?>

<main>
	<div  class="container category">
		
		<div class="category__left">
			<h2 class="title-text__title"><?php single_cat_title(); ?></h2>
			<?php the_category( '' ); ?>
			<ul class="category__list">
				
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br/>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="category__right">
			<h2 class="title-text__title">Other categories</h2>
			<ul>
				<?php wp_list_categories('hide_empty=1&exclude=1&title_li=&orderby=count&order=desc&use_desc_for_title=0'); ?>
			</ul>
		</div>
		
	</div>
</main>

<?php get_footer(); ?>