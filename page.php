<?php /*Template name : Page Accueil*/?>
<?php get_header(); ?>


    <div class="container-fluid background2">
        <div class="container">
            <div class="row text-white text-center mt-4">
                <div class="col-12 col-sm-6 col-md-3  d-flex align-items-center flex-column mb-4">


                                <?php if ( is_active_sidebar( 'item-1' ) ) : ?>
	                            <?php dynamic_sidebar( 'item-1' ); ?>
                                <?php endif; ?>

                                <?php if ( is_active_sidebar( 'maitre-artisan' ) ) : ?>
	                            <?php dynamic_sidebar( 'maitre-artisan' ); ?>
                                <?php endif; ?>

                                <?php if ( is_active_sidebar( 'lorem' ) ) : ?>
	                            <?php dynamic_sidebar( 'lorem' ); ?>
                                <?php endif; ?>
                    
                </div>
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-center flex-column mb-4">

                                
                <?php if ( is_active_sidebar( 'item-2' ) ) : ?>
	                            <?php dynamic_sidebar( 'item-2' ); ?>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'produit-frais' ) ) : ?>
	                            <?php dynamic_sidebar( 'produit-frais' ); ?>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'lorem-2' ) ) : ?>
	                            <?php dynamic_sidebar( 'lorem-2' ); ?>
                                <?php endif; ?>

                </div>
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-center flex-column mb-4">
                  
                    <?php if ( is_active_sidebar( 'item-3' ) ) : ?>
	                            <?php dynamic_sidebar( 'item-3' ); ?>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'saveur-unique' ) ) : ?>
	                            <?php dynamic_sidebar( 'saveur-unique' ); ?>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'lorem-3' ) ) : ?>
	                            <?php dynamic_sidebar( 'lorem-3' ); ?>
                                <?php endif; ?>                
                            
                
                </div>

                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-center flex-column mb-4">
                <?php if ( is_active_sidebar( 'item-4' ) ) : ?>
	                            <?php dynamic_sidebar( 'item-4' ); ?>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'professionnel' ) ) : ?>
	                            <?php dynamic_sidebar( 'professionnel' ); ?>
                                <?php endif; ?>
                                <?php if ( is_active_sidebar( 'lorem-4' ) ) : ?>
	                            <?php dynamic_sidebar( 'lorem-4' ); ?>
                                <?php endif; ?>                
                            </div>
            </div>
        </div>
    </div>



    <div id="boulangerie" class="d-flex flex-column justify-content-center align-items-center text-black pt-5 pad-5">
    <?php if ( is_active_sidebar( 'notre-boulangerie' ) ) : ?>
	<?php dynamic_sidebar( 'notre-boulangerie' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'presentation-boulangerie' ) ) : ?>
	<?php dynamic_sidebar( 'presentation-boulangerie' ); ?>
    <?php endif; ?>
    </div>


    <div id="presta" class="container-fluid p-0 prestations">


        <div class="container p-0 d-flex  flex-column align-items-center">

        <?php if ( is_active_sidebar( 'prestations' ) ) : ?>
	<?php dynamic_sidebar( 'prestations' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'produit-du-moment' ) ) : ?>
	<?php dynamic_sidebar( 'produit-du-moment' ); ?>
    <?php endif; ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container pt-5 pb-5">
            <div class="row d-flex justify-content-center justify-content-sm-center justify-content-md-between justify-content-lg-between justify-content-xl-between">
                <div class="col-10 col-sm-4 d-flex flex-sm-column flex-md-column flex-lg-column justify-content-start align-items-center">
                    <?php if ( is_active_sidebar( 'prestation-1' ) ) : ?>
	<?php dynamic_sidebar( 'prestation-1' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'nos-viennoiseries' ) ) : ?>
	<?php dynamic_sidebar( 'nos-viennoiseries' ); ?>
    <?php endif; ?>
                    
                    
                </div>
                <div class="col-10 col-sm-4 d-flex flex-sm-column flex-md-column flex-lg-column justify-content-start align-items-center">
                    <?php if ( is_active_sidebar( 'prestation-2' ) ) : ?>
	<?php dynamic_sidebar( 'prestation-2' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'nos-desserts' ) ) : ?>
	<?php dynamic_sidebar( 'nos-desserts' ); ?>
    <?php endif; ?>
                </div>
                <div class="col-10 col-sm-4 d-flex flex-sm-column flex-md-column flex-lg-column align-items-center">
                <?php if ( is_active_sidebar( 'prestation-3' ) ) : ?>
	<?php dynamic_sidebar( 'prestation-3' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'nos-maccarons' ) ) : ?>
	<?php dynamic_sidebar( 'nos-maccarons' ); ?>
    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    
<?php
get_footer();?>