<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 

		
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#009ca6">
		<meta name="theme-color" content="#009ca6"> 
	

	<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
	<span role="navigation" aria-label="Skip to content">
		<a class="skip-to-content"  href="#main">
		  Skip to content
		</a>
	</span>
	<header>
		<div class="header__main">
			<div class="header__container">
				<div class="header__inner header__inner--left">
					<?php 
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
					?>
				</div>
				<div class="header__inner header__inner--right">
					<nav role="navigation" aria-label="Main Menu" class="header__menu">
						<?php wp_nav_menu( array( 
							'theme_location' => 'main-menu', 
							'container' => '',
						) ); ?>

						<div class="burger__header__inner--contact-details">
						<div class="header__inner burger__header__inner--tel">
							<?php if(get_option('phone_number')): ?>
								<a class="header__links header__contact"href="tel: <?php echo get_option( 'phone_number' ); ?>">
									<svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
									<span class="icon__label"><?php echo get_option( 'phone_number' ); ?></span>
								</a>
							<?php endif; ?>
						</div>
						<div class="header__inner burger__header__inner--address">
							<?php if(get_option('address')): ?>
								<span><?php echo get_option( 'address' ); ?></span>
							<?php endif; ?>
						</div>
						</div>

						
					</nav>
					<button class="header__burger" aria-label="Mobile Menu">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
				<div class="header__inner header__inner--tel">
					<?php if(get_option('phone_number')): ?>
						<a class="header__links header__contact"href="tel: <?php echo get_option( 'phone_number' ); ?>">
							<svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#80bdb8" d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
							<span class="icon__label"><?php echo get_option( 'phone_number' ); ?></span>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

