<?php
/**
 * Template part for displaying search section.
 */

?>
<section class="main-search search-form">
	<div class="search-form__container search-form__container--submit container">
		<div class="search-form__wide">
			<h3 class="search-form__title"><?= get_field('franchise_title', 190); ?></h3>
			<p class="search-form__text"><?= get_field('franchise_sbt', 190); ?></p>
		</div>
		<div class="search-form__narrow">
			<a href="<?php echo esc_url( home_url( '/contact' ));?>" class="search-form__btn"><?= get_field('franchise_btn', 190); ?></a>
		</div>
	</div>
	<!-- /.container -->
</section>
		<!-- /.search-form -->