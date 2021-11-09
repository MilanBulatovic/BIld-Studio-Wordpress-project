<?php
/**
 * Template part for displaying home page content
 * 
 * @package Bild_Test
 */
?>

<!-- Entry - Title, link to all posts, arrow navigation and pagination of swiper -->
<div class="upper">
    <div class="vijesti">
        <img src="<?php echo esc_html(get_template_directory_uri()); ?>/img/vijesti-icon.png" alt="news-icon">
        <h5>Vijesti</h5>
    </div>

    <div class="navigation-post">

        <a href="<?php esc_url(get_post_type_archive_link('vijesti'));?>"><p>Vidi sve vijesti<span>&gt;</span></p></a>

        <div class="swiper-pagination swiper-main-pagination"></div>
        <div class="swiper-button-prev prev-main"></div>
        <div class="swiper-button-next next-main"></div>
    
    </div>
</div>

<!-- Displaying two recent posts on home page -->
<div class="aricle-post-wrapper">

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
                                    
                                    <div class="content">
                                        <a class= "title" href="<?php the_permalink();?>"><?php the_title();?></a>
                                        <p class="excerpt"><?php the_excerpt(); ?></p>
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

<!-- Action two divs -->
<div class="wrapper-elements d-flex">
 
    <div class="block mg-right">Akcija 1</div>

    <div class="block">Akcija 2</div>

</div>

