<?php
/**
 * Template part for Ponuda page
 *
 * @package Bild_Test
 */

?>

<div class="entry-content-ponuda">

    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <div class="card-custom card-custom-ponuda">
        <div class="pb">
            <div class="text-size-share text-size-share-ponuda ">
                <div class="text-size">
                    <p>Text-size</p>
                </div>
                <div class="share">
                    <p>Share</p>
                    <div class="icons">
                        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/fb.png" alt="facebook-icon"></a>
                        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tweet.png" alt="twitter-icon"></a>
                        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mail.png" alt="mail-icon"></a>
                        <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/add.png" alt="plus-icon"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ponuda-holder">

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">

                <!-- Headline -->
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button first-btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
    
                    Plumbing and Sewage
                    </button>
                </h2>

                <!-- Logos -->
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <?php

                            // Check if rows exist
                            if( have_rows('entry') ): ?>
                                <div class="row">

                                    <?php
                                    // Loop through rows
                                    while( have_rows('entry') ) : the_row();

                                        $logo = get_sub_field('logo');
                                        $name = get_sub_field('name_of_the_company');
                                        $country = get_sub_field('country');  ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6"> 
                                            <img src="<?php echo $logo; ?>"/>
                                            <p class="company-name"><?php echo $name ?></p>
                                            <p class="country"><?php echo $country ?></p>
                                        </div> 
                                    <?php endwhile;  ?>
                               
                                </div>
                            <?php endif;  ?>
                       
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed second-btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Heating
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <h1>This is the second item's accordion body.</h1>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed third-btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Bathroom equipment
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <h1>This is the third item's accordion body.</h1>
                </div>
                </div>
            </div>
        </div>
        
        </div><!-- .entry-content -->
    </div>
</div>
