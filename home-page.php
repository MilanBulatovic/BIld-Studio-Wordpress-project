<?php
/**
 * Template name: Home Page
 */

 get_header();

?>

<div class="container-custom">
    <div class="content-holder">

        <main id="primary" class="site-main">
           
            <?php
            if ( have_posts() ) :
                
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'home' );
                
                endwhile;
                endif;

                ?>

        </main><!-- #main -->

        <aside>
            <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>  
        </aside>

    </div>
</div>


<?php
get_footer();