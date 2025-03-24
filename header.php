<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Font Awesome for icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bone-co'); ?></a>

		<header id="masthead" class="site-header">
			<div class="header-container">

				<div class="site-branding">
					<div class="logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<?php the_custom_logo(); ?>
						</a>
					</div>
					<div class="header-icons">
					<?php if (is_active_sidebar('header-widget')): ?>
						<div class="header-widget-area">
							<?php dynamic_sidebar('header-widget'); ?>
						</div>
					<?php endif; ?>

					<button id="drop-down-menu" class="burger-menu">
						<i class="fas fa-bars"></i>
					</button>
					</div>
				</div>
				

				<nav id="mobile-menu" class="mobile-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'container' => 'div',
							'container_class' => 'mobile-menu-container',
							'menu_class' => 'mobile-menu-list'
						)
					);
					?>
				</nav>

				<nav id="site-navigation" class="main-navigation desktop-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
					?>
				</nav>
			</div>

			<script>
				const mobileMenu = document.getElementById("drop-down-menu");
				const mobileMenuClicked = document.getElementById("mobile-menu");

				mobileMenu.addEventListener("click", function () {
					mobileMenuClicked.classList.toggle("active");
				});

			</script>

		</header>