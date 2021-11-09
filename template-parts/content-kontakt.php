<?php
/**
 * Template part for Kontakt page
 *
 * @package Bild_Test
 */

?>



<div class="entry-content-kontakt">

    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="card-custom kontakt">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kontakt forma<i class="fas fa-caret-down"></i></button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Kontakt info</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
               <?php the_content(); ?>
               <div class="ulica-link">
                    <p class="ulica"><?php the_field('ulica'); ?></p>
                    <a href="https://www.google.com/maps?ll=42.434294,19.247813&z=16&t=m&hl=en&gl=US&mapclient=embed&cid=17958060761168651928" target="blank">View larger map ></a>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        </div>
       
        <div class="sivi-separator"></div>

        <div class="forma-info d-flex">
            <div class="forma">
                <form action="">
                    <label for="name">Your name:</label>
                    <input type="text" name="name">
                    <label for="name">E-mail:</label>
                    <input type="email" name="email">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject">
                    <label for="message">Message:</label>
                    <textarea type="textarea" name="message"></textarea>
                    <input type="submit" value="Pošalji >"class="form-btn">
                </form>
            </div>

            <div class="info">
                <div class="inzenjering">
                    ETG inženjering<span>Ulica 13. jula 2, 20000 Podgorica</span>
                </div>
                <div class="fax">
                    Tel/Fax:<span>+382 20 241 064</span>
                </div>
                <div class="mail">
                    E-mail:<span>etging@t-com.me</span>
                </div>
                <div class="website">
                    Web site:<span>www.etging.com</span>
                </div>
            </div>

        </div>
      
	</div>
</div><!-- .entry-content -->