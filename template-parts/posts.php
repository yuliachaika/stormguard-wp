<?php
/**
 * Template part for displaying posts
 * Template post type: post
 */

?>
<section class="main-posts posts-block">
	<div class="posts-block__container container">
		<h2 class="posts-block__title"><?php echo get_cat_name(7); ?></h2>
		<div class="posts-block__wrap">
			<?php 
			$args = array(
				'post_type' => 'post',
				'publish' => true,
				'posts_per_page' => 3,
				'paged' => get_query_var('paged'),
				);

			query_posts($args);

			while(have_posts()){
				the_post();
				get_template_part( 'content/content-post', get_post_type() );
			}               
			?>
			
		</div>
		<a class="posts-block__btn" href="<?php echo esc_url( home_url( '/blog' ));?>">View More News</a> 
	</div>
	<!-- /.container -->
</section>
<!-- /.posts -->


