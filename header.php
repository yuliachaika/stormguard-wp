<?php
/**
 * The template for displaying the header.
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="shortcut icon" href="assets/dist/img/fav.png"> -->
	<title><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>
</head>

<body>

	<header class="header">
		<div class="header__top header-top">
			<div class="header__container container">
				<a href="franchise.php" class="header-top__link">
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
				<a href="<?php echo home_url(); ?>" class="header__logo">
						<img class="header__img" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="logo">
					</a>
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