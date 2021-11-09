<?php
/**
 * The template for displaying all pages
 *
 * @package Bild_Test
 */

get_header('two');
?>
<div class="container-custom">
    <div class="content-holder">
		<main id="o-nama" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();
				if(is_page(13)) {
					get_template_part( 'template-parts/content', 'o-nama' );

				} elseif( is_page(19) ){
					get_template_part( 'template-parts/content', 'kontakt' );

				} elseif( is_page(15) ) {
					get_template_part( 'template-parts/content', 'ponuda' );
				} 
				 else {
					get_template_part( 'template-parts/content', 'none' );
				}

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
