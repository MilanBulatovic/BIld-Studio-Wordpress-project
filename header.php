<?php
/**
 * The header for our theme
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

	<header id="masthead" class="site-header">

		<?php get_template_part( 'template-parts/content', 'links' );
 ?>
			
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

		<!-- Slideshow -->
		<div class="container-custom swiper-holder">
			
			<!-- Slider main container -->
			<div class="swiper swiper-hero">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">

					<?php 
					
					$args = array(
						//'post_type' => 'post',
						'category_name' => 'offer',
						'posts_per_page' => 1
					);

					$loop = new WP_Query($args);

					if($loop->have_posts()) :
						while($loop->have_posts()) :
							$loop->the_post(); ?>

							<!-- Slides -->
							<div class="swiper-slide">
								<div class="title">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content();?></p>
								</div>
								<div class="thumb"><?php the_post_thumbnail(); ?></div>
								
								<?php
								// Check if rows exist
                           		 if( have_rows('logos') ): ?>
									<div class="brand-logos">
                                    <?php
                                    // Loop through rows
                                    while( have_rows('logos') ) : the_row();

                                        $logo = get_sub_field('insert_logo'); ?>

                                    	
                                        	<img src="<?php echo $logo; ?>"/>
                                        

                                    <?php endwhile;  ?>
									</div>
                            	<?php endif;  ?>
							</div> <!-- Swiper slide -->

					<?php wp_reset_postdata();
					endwhile;
					endif; ?>
				</div>

				<!-- Pagination -->
				<div class="swiper-pagination swiper-hero-pagination"></div>
			</div>
			<div class="vav-buttons-wrapper">
				<!-- Navigation buttons -->
				<div class="swiper-button-prev prev-hero"></div>
				<div class="swiper-button-next next-hero"></div>
			</div>

			
		</div>

		<!-- Glass logos -->
		<div class="glass-stripe"></div>

	</header><!-- #masthead -->
