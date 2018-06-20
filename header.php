<?php
/**
 * The template for displaying the header.
 */
$options = get_option( 'theme_settings' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/fav.png">
	<title><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>
</head>

<body>

	<header class="header">
		<div class="header__top header-top">
			<div class="header__container container">
				<a href="<?php echo esc_url( home_url( '/locations' ));?>" class="header-top__link">
					Find Your Local Storm Guard! 
				</a>
				<nav class="header-top__nav nav-top">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'header_menu',
						'menu_class'     => 'nav-top__list',
						'container'      => 'ul'
						) );
						?>
					</nav>
				</div>
				<!-- /.container -->
			</div>
			<!-- /.header__top -->
			<div class="header__row">
				<div class="header__container header__container--padding container">
					<?
					if($options['custom_logo']) {
						?>
						<a href="<?php bloginfo( 'url' ) ?>/" class="header__logo" title="<?php bloginfo( 'name' ) ?>">
							<img class="header__img" src="<?php bloginfo('template_url');?><?php echo $options['custom_logo']; ?>" alt="<?php bloginfo( 'name' ) ?>" /></a>
							<?php
						} else {?>
						<a href="<?php echo home_url(); ?>" class="header__logo">
							<img class="header__img" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="logo">
						</a>
						<?php } ?>
						<nav class="header__nav main-nav">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'menu_class'     => 'main-nav__list',
								'container'      => 'ul'
								) );
								?>
								<a class="main-nav__toggle" href="#">&#9776;</a>
							</nav>
						</div>
						<!-- /.container -->
					</div>

				</header>
<!-- / header -->