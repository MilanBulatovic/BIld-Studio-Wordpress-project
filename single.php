<?php
/**
 * The template for displaying all single posts
 *
 * @package Bild_Test
 */

	get_header('two');
?>

<div class="container-custom">
    <div class="content-holder">
		<main id="primary" class="site-main site-main-single">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<aside>
			<?php get_template_part( 'template-parts/content', 'sidebar' ); ?>  
		</aside>

	</div>
</div>

<?php

get_footer();
