<?php
/**
 * Template part for displaying sidebar content
 *
 * @package Bild_Test
 */
?>

<!-- Entry - Title, link to all posts, arrow navigation and pagination of swiper -->
<?php
if( !is_front_page() && is_page() OR is_single() ) { ?>
    <div class="upper">
        <div class="vijesti">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/vijesti-icon.png" alt="news-icon">
            <h5>Vijesti</h5>
        </div>

        <div class="navigation-post">

            <a href="<?php esc_html(get_post_type_archive_link('vijesti'));?>"><p>Vidi sve vijesti<span>&gt;</span></p></a>

            <div class="swiper-pagination swiper-main-pagination"></div>
            <div class="swiper-button-prev prev-main"></div>
            <div class="swiper-button-next next-main"></div>
        
        </div>
    </div>

    <!-- TWo posts -->
    <div class="article-post-wrapper">
        <?php 
        $args = array(
            'post_type' => 'post',
            'cat' => 4,
            'posts_per_page' => 2
        );

        $loop = new WP_Query($args);
        if($loop->have_posts()) : ?>

            <div class="articles-wrapper">
                <div class="swiper swiper-main">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php
                                while($loop->have_posts()) :
                                $loop-> the_post(); ?>
                                
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="entry-content">
                                        <div class="date">
                                            <div class="day"><?php echo get_the_date( 'd' ); ?></div>
                                            <div class="month"><?php echo get_the_date( 'M' ); ?></div>
                                        </div>
                                        
                                        <div class="content content-sidebar">
                                            <a class= "title title-sidebar" href="<?php the_permalink();?>"><?php the_title();?></a>
                                        </div><!-- .entry-content -->
                                    </div>  
                                </article>
                            
                            <?php
                                wp_reset_postdata();
                            endwhile; ?>
                        </div>
                    </div>
            </div>
            </div>
            <?php
        endif; ?>

    </div>
<?php
}
?>

<div class="upper">
    <div class="vijesti side">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/target.png" alt="target-icon">
        <h5>Aktuelno</h5>
    </div>

    <div class="navigation-post">
        <a href="<?php esc_html(get_post_type_archive_link( 'post' ));?>"><p>Vidi sve vijesti<span>&gt;</span></p></a>
        <div class="swiper-pagination swiper-pagination-side"></div>
        <div class="swiper-button-prev prev-side"></div>
        <div class="swiper-button-next next-side"></div>
    </div>
</div>

<div id="widget-wrapper" class="widget-block">
    <!-- Slider main container -->
    <div class="swiper swiper-side">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <?php get_sidebar('sidebar-1'); ?>
            </div>
        </div>
    </div>
</div>

<?php
if( is_single() OR is_front_page() OR is_page(19) ) {
     dynamic_sidebar('sidebar-2');
}



