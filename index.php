<?php
/**
 * The main template file
 *
 * @package Bild_Test
 */

get_header('two');
?>

<div class="container-custom">
    <div class="content-holder">
		<main id="primary" class="site-main site-main-single site-main-blog">
			<header class="entry-header">
                <div class="pagination">
                        <?php the_posts_pagination(array( 
                    'prev_text' => '<span><i class="fas fa-chevron-left"></i>',
                    'next_text' => '<span><i class="fas fa-chevron-right"></i>' )); ?>
                </div>
            </header><!-- .entry-header -->
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'blog' );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			<header class="entry-header">
				<div id="ft-pag" class="pagination">
						<?php the_posts_pagination(array( 
					'prev_text' => '<span><i class="ft-i fas fa-chevron-left"></i>',
					'next_text' => '<span><i class="ft-i fas fa-chevron-right"></i>' )); ?>
				</div>
			</header><!-- .entry-header -->
		</main><!-- #main -->

		<aside>
			<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>  
		</aside>
		<!-- Pagination --> 
		
	</div>
</div>
<?php
get_footer();
