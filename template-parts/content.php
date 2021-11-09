<?php
/**
 * Template part for displaying posts
 *
 * @package Bild_Test
 */

?>
<div class="article-wrapper">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="entry-header">
			<div class="text-size-share">
				<div class="text-size">
					<p>Text-size</p>
				</div>
				<div class="share">
					<p>Share</p>
					<div class="icons">
						<a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /img/fb.png" alt="facebook-icon"></a>
						<a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /img/tweet.png" alt="twitter-icon"></a>
						<a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /img/mail.png" alt="mail-icon"></a>
						<a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /img/add.png" alt="plus-icon"></a>
					</div>
				</div>
			</div>
			<?php
				the_title( '<h4 class="entry-title">', '</h4>' ); ?>
				<div class="date-single-post"><?php echo get_the_date('d.m.Y');  ?></div>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bild-test' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<div class="single-post-footer">
			<div class="print-export">
				<div class="print">
					<button class="print-link" href="javascript:window.print()"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /img/print.png" alt="printer-icon"></button>
					<p>Odštampaj</p>
				</div>
				<div class="pdf">
					<a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /img/pdf.png" alt="pdf-icon"></a>
					<p>Pdf export</p>
				</div>
			</div>
			<div class="back">
				<button type="button" onclick="history.back();"><img src="<?php echo esc_url(get_template_directory_uri()); ?> /img/back.png" alt="arrow-left-icon"></button> 
				<p>Povratak nazad</p>
			</div>
		</div>


	</article><!-- #post-<?php the_ID(); ?> -->
</div>
