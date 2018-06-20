<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
$options = get_option( 'theme_settings' );
?>
<footer class="footer">
	<div class="container footer__container">
		<div class="footer__left">
			<p class="footer__text">

				<?php if($options['footer']) { ?>
				<p class="footer__text"><?php echo $options['footer']; ?>
					<?php } else { ?>
					<p class="footer__text">Copyright 2017. Storm Guard. All Rights Reserved. Website Produced by:&nbsp;
						<?php } ?>
						<a href="#" class="footer__link" target="_blank">Inverse Paradox</a>
					</p>
				</div>
				<!-- /left -->
				<div class="footer__right">
					<ul class="footer__list">
						<li class="footer__item">
							<a href="<?php echo $options['footer_link_1']; ?>" target="_blank" class="footer__link">Customer Service</a>
						</li>
						<li class="footer__item">
							<a href="<?php echo $options['footer_link_2']; ?>" target="_blank" class="footer__link">Careers</a>
						</li>
						<li class="footer__item">
							<a href="<?php echo $options['footer_link_3']; ?>" target="_blank" class="footer__link">Terms &amp; Conditions</a>
						</li>
						<li class="footer__item">
							<a href="<?php echo $options['footer_link_4']; ?>" target="_blank" class="footer__link">Privacy Policy</a>
						</li>
						<li class="footer__item">
							<a href="<?php echo $options['footer_link_5']; ?>" target="_blank" class="footer__link">Sitemap</a>
						</li>
					</ul>                   
				</div>
				<!-- /right -->
			</div>
			<!-- /.container -->
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

	</body>
	</html>