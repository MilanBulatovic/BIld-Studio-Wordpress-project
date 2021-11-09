<?php
/**
 * The header two
 * 
 * @package Bild_Test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Bild Studio Test</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead-two" class="site-header header-two">
			
		<!-- Top navigation -->
		<nav id="top-site-navigation" class="top-navigation">
			<div class="container-custom df">
				<button class="dots"><i class="fas fa-ellipsis-h"></i></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'top',
					)
				); ?>

				<div class="sitemap">
					<a href="#">Mapa sajta</a>
				</div>
				<div class="social-icons">
					<a href="#">
						<img src="<?php echo esc_url(get_template_directory_uri());?>/img/skype.png" alt="skype-icon">
					
				
						<img src="<?php echo esc_url(get_template_directory_uri());?>/img/facebook.png" alt="facebook-icon">
					
					
						<img src="<?php echo esc_url(get_template_directory_uri());?>/img/location.png" alt="location-icon">
					</a>
				</div>
				<div class="language">
					<a href="#">
						<img src="<?php echo esc_url(get_template_directory_uri());?>/img/mne.png" alt="mne-flag"><p>Mne</p>
						<img src="<?php echo esc_url(get_template_directory_uri());?>/img/eng.png" alt="eng-flag"><p>Eng</p>
					</a>
				</div>
			</div><!-- .container-custom -->
		</nav>
	
		<!-- Main navigation -->
		<div class="container-custom">
			<div class="nav-search-wrapper">

				<!-- Logo -->
				<div class="logo">
					<?php the_custom_logo();?>
				</div><!-- .site-branding -->

				<div class="m-right">

					<nav id="site-navigation" class="main-navigation">
						<a href="<?php echo get_home_url(); ?>" class="home-icon"><img src="<?php bloginfo( 'template_url' ); ?>/img/home-icon.png" alt="home"></a>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
			
					<!-- Search -->
					<div class="search-form">
						<form action="/" class="form">
							<input type="text" name="s" id="search" value="Search..." />
							<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/search.png" class="search-submit" />
						</form>
					</div>

				</div>

				<!-- Mobile menu toggler -->
				<button class="menu-toggler"><i class="fas fa-bars"></i></button>

			</div><!-- .nav-search-wrapper -->
		</div><!-- .container-custom -->

	</header><!-- #masthead -->
