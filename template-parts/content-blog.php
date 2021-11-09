<?php
/**
 * Template part for displaying All posts - Blog Page
 *
 * @package Bild_Test
 */

?>


    <div class="articles-wrapper">
        <div class="blog-article-wrapper">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <div class="date">
                        <div class="day"><?php echo get_the_date( 'd' ); ?></div>
                        <div class="month"><?php echo get_the_date( 'M' ); ?></div>
                    </div>
                    
                    <div class="content">
                        <a class="title" href="<?php the_permalink();?>"><?php the_title();?><span class="date-blog"><?php echo get_the_date('d.m.y');?></span></a>
                        <p class="excerpt"><?php the_excerpt(); ?></p>
                    </div><!-- .entry-content -->
                </div>  
            </article>
            </div>
    </div>

  
