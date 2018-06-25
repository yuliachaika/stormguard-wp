<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
<footer class="footer" style="background: <?= get_field('background-color', 'option'); ?>">
	<div class="container footer__container">
		<div class="footer__left">
				<p class="footer__text"><?= get_field('copyright', 'option'); ?>&nbsp;
					<a href="<?= get_field('copyright_link_url', 'option'); ?>" class="footer__link" target="_blank"><?= get_field('copyright_link', 'option'); ?></a>
					</p>
				</div>
				<!-- /left -->
				<div class="footer__right">
					<ul class="footer__list">
						<li class="footer__item">
							<a href="<?= get_field('footer_link_url_1', 'option'); ?>" class="footer__link"><?= get_field('footer_link_1', 'option'); ?></a>
						</li>
						<li class="footer__item">
							<a href="<?= get_field('footer_link_url_2', 'option'); ?>" class="footer__link"><?= get_field('footer_link_2', 'option'); ?></a>
						</li>
						<li class="footer__item">
							<a href="<?= get_field('footer_link_url_3', 'option'); ?>" class="footer__link"><?= get_field('footer_link_3', 'option'); ?></a>
						</li>
						<li class="footer__item">
							<a href="<?= get_field('footer_link_url_4', 'option'); ?>" class="footer__link"><?= get_field('footer_link_4', 'option'); ?></a>
						</li>
						<li class="footer__item">
							<a href="<?= get_field('footer_link_url_5', 'option'); ?>" class="footer__link"><?= get_field('footer_link_5', 'option'); ?></a>
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