<?php
/**
 * Template part for displaying contact form
 * Template post type: post
 */
global $tname;
$obj = get_queried_object();
?>

<div class="contact-form-gallery__contact contact-form">
	<div class="title-text">
		<h2 class="title-text__title title-text__title--white"><?= get_field('contact_form_title', 'option'); ?></h2>
		<div class="title-text__text title-text__text--white">
			<?php 
					if( isset($tname) && $tname === 'front-page')  {
						the_field('contact_form_home_descr', 22); 
					} else {
						the_field('contact_form_descr', 'option'); 
					}?> 
		</div>
	</div>
	<div class="contact-form__form">
		
		
		<?php if( isset($tname) && $tname === 'front-page')  {
			echo  do_shortcode('[contact-form-7 id="131" title="Contact form" html_class="form"]'); 
		} else { ?> 
		<div class="contact-form__links contact-links">
			<a href="<?= get_field('cf_link_1', 'option'); ?>" class="contact-links__link" target="_blank"><?= get_field('cf_link_text_1', 'option'); ?></a>
			<a href="<?= get_field('cf_link_2', 'option'); ?>" class="contact-links__link" target="_blank"><?= get_field('cf_link_text_2', 'option'); ?></a>
		</div> 
		
		<?php } ?>
	</div>
	<!-- /form -->
	
	
</div>
<!-- /.contact-form -->












