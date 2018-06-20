<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>


<main id="main">
	<section class="error-404 not-found">
		<div class="container">

			<h1 class="title-text__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.'); ?></h1>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?'); ?></p>

				<?php
				get_search_form();

				the_widget( 'WP_Widget_Recent_Posts' );
				?>

				<div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories' ); ?></h2>
					<ul>
						<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
							) );
							?>
						</ul>
					</div>
					<!-- .widget -->

					<?php
					$stormguard_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$stormguard_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div>
			</div>
			<!-- /.container -->
		</section>

	</main>
	<?php
	get_footer();