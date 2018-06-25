<?php
/**
 * Template part for displaying search section.
 */

?>
<section class="main-search search-form">
	<div class="search-form__container container">
		<div class="search-form__wide search-form__wide--icon">
			<a href="<?php echo esc_url( home_url( '/become-a-franchise' ));?>" class="search-form__title"><?= get_field('search_form_title', 'option'); ?></a>
			<p class="search-form__text"><?= get_field('search_form_sbt', 'option'); ?></p>
		</div>
		<div class="search-form__narrow">
			<form class="search-form__form">
				<input class="search-form__input" type="text" id="code" name="code" placeholder="Enter Zip Code" required>
				<label for="code"></label>
				<button type="submit" class="search-form__btn"><?= get_field('search_form_btn', 'option'); ?></button>
			</form>
		</div>
	</div>
	<!-- /.container -->
</section>
	<!-- /.search-form -->