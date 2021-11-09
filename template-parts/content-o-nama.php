<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Bild_Test
 */
?>




<div class="entry-content-about-us">

	<h1><?php the_field('about_us_tittle'); ?></h1>
	<div class="card-custom card-o-firmi about-us">
		<?php the_field('about_us'); ?>
	</div>

	<h1><?php the_field('vision_tittle'); ?></h1>
	<div class="card-custom card-o-firmi vision">
		<?php the_field('vision_2012'); ?>
	</div>	

	<h1><?php the_field('mission_tittle'); ?></h1>
	<div class="card-custom card-o-firmi mission">
		<?php the_field('the_mission'); ?>
	</div>	

	<h1><?php the_field('objectives_tittle'); ?></h1>
	<div class="card-custom card-o-firmi objectives">
		<?php the_field('objectives'); ?>
	</div>	

</div><!-- .entry-content -->

