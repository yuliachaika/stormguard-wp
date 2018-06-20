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
		<h2 class="title-text__title title-text__title--white"><?php echo get_cat_name(8); ?></h2>
		<div class="title-text__text title-text__text--white"><?php echo category_description(8); ?></div>
	</div>
	<div class="contact-form__form form">
		
		
		<?php if( isset($tname) && $tname === 'front-page')  {
			echo  do_shortcode('[contact-form-7 id="131" title="Contact form" html_class="form"]'); 
		} else { ?> 
		<div class="contact-form__links contact-links">
			<a href="<?php echo esc_url( home_url( '/contact' ));?>" class="contact-links__link" target="_blank">Contact Your Local Storm Guard Franchise</a>
			<a href="<?php echo esc_url( home_url( '/contact' ));?>" class="contact-links__link" target="_blank">Contact Your Local Storm Guard Franchise</a>
		</div> 
		
		<?php } ?>
	</div>
	<!-- /form -->
	
	
</div>
<!-- /.contact-form -->












