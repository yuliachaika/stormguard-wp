<?php
/**
 * Template part for displaying search section.
 */

?>
<section class="main-search search-form">
	<div class="search-form__container container">
		<div class="search-form__wide search-form__wide--icon">
			<a href="<?php echo esc_url( home_url( '/become-a-franchise' ));?>" class="search-form__title">Find A Franchise Near You</a>
			<p class="search-form__text">Want to speak to us in person? Enter your zip code to find the nearest franchise.</p>
		</div>
		<div class="search-form__narrow">
			<form class="search-form__form">
				<input class="search-form__input" type="text" id="code" name="code" placeholder="Enter Zip Code" required>
				<label for="code"></label>
				<button type="submit" class="search-form__btn">Submit</button>
			</form>
		</div>
	</div>
	<!-- /.container -->
</section>
	<!-- /.search-form -->