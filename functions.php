
<?php 


function header_widgets_init() {
 
register_sidebar( array(

 'name' => 'logo-header',
 'id' => 'logo-header',
'before_widget' => '<div class="col-6 pos-logo logo-responsive">',
'after_widget' => '</div>',
 ) );


register_sidebar( array(

        'name' => 'adress',
        'id' => 'adress',
       'before_widget' => '<div class="col-5 pos-adress">',
       'after_widget' => '</div>',
        ) );

        register_sidebar( array(

            'name' => 'tel',
            'id' => 'tel',
           'before_widget' => '<div class="col-1 pos-phone">',
           'after_widget' => '</div>',
            ) );

            register_sidebar( array(

                'name' => 'slogan',
                'id' => 'slogan',
               'before_widget' => '<div class="pos-slogan">',
               'after_widget' => '</div>',
                ) );

 
                register_sidebar( array(

                    'name' => 'slide-1',
                    'id' => 'slide-1',
                   'before_widget' => '<div class="carousel-item active">',
                   'after_widget' => '</div>',
                    ) );

                    register_sidebar( array(

                        'name' => 'slide-2',
                        'id' => 'slide-2',
                       'before_widget' => '<div class="carousel-item">',
                       'after_widget' => '</div>',
                        ) );

                        register_sidebar( array(

                            'name' => 'slide-3',
                            'id' => 'slide-3',
                           'before_widget' => '<div class="carousel-item">',
                           'after_widget' => '</div>',
                            ) );
    
                            register_sidebar( array(

                                'name' => 'item-1',
                                'id' => 'item-1',
                               'before_widget' => '<div class="icone rounded-circle circles p-5 mb-4">',
                               'after_widget' => '</div>',
                                ) );
            
                                register_sidebar( array(

                                    'name' => 'maitre-artisan',
                                    'id' => 'maitre-artisan',
                                   'before_widget' => '<h3 class="text-uppercase mb-4">',
                                   'after_widget' => '</h3>',
                                    ) );

                                    register_sidebar( array(

                                        'name' => 'lorem',
                                        'id' => 'lorem',
                                       'before_widget' => '<p class=" text-center font-size-25 mw-200">',
                                       'after_widget' => '</p>',
                                        ) );

                                        register_sidebar( array(

                                            'name' => 'item-2',
                                            'id' => 'item-2',
                                           'before_widget' => '<div class="icone rounded-circle circles p-5 mb-4">',
                                           'after_widget' => '</div>',
                                            ) );

                                            register_sidebar( array(

                                                'name' => 'produit-frais',
                                                'id' => 'produit-frais',
                                               'before_widget' => '<h3 class="text-uppercase mb-4">',
                                               'after_widget' => '</h3>',
                                                ) );

                                                register_sidebar( array(

                                                    'name' => 'lorem-2',
                                                    'id' => 'lorem-2',
                                                   'before_widget' => '<p class=" text-center font-size-25 mw-200">',
                                                   'after_widget' => '</p>',
                                                    ) );

                                                    register_sidebar( array(

                                                        'name' => 'item-3',
                                                        'id' => 'item-3',
                                                       'before_widget' => '<div class="icone rounded-circle circles p-5 mb-4">',
                                                       'after_widget' => '</div>',
                                                        ) );

                                                        register_sidebar( array(

                                                            'name' => 'saveur-unique',
                                                            'id' => 'saveur-unique',
                                                           'before_widget' => '<h3 class="text-uppercase mb-4">',
                                                           'after_widget' => '</h3>',
                                                            ) );

                                                            register_sidebar( array(

                                                                'name' => 'lorem-3',
                                                                'id' => 'lorem-3',
                                                               'before_widget' => '<p class=" text-center font-size-25 mw-200">',
                                                               'after_widget' => '</p>',
                                                                ) );

                                                                register_sidebar( array(

                                                                    'name' => 'item-4',
                                                                    'id' => 'item-4',
                                                                   'before_widget' => '<div class="icone rounded-circle circles p-5 mb-4">',
                                                                   'after_widget' => '</div>',
                                                                    ) );

                                                                    register_sidebar( array(

                                                                        'name' => 'professionnel',
                                                                        'id' => 'professionnel',
                                                                       'before_widget' => '<h3 class="text-uppercase mb-4">',
                                                                       'after_widget' => '</h3>',
                                                                        ) );

                                                                        register_sidebar( array(

                                                                            'name' => 'lorem-4',
                                                                            'id' => 'lorem-4',
                                                                           'before_widget' => '<p class=" text-center font-size-25 mw-200">',
                                                                           'after_widget' => '</p>',
                                                                            ) );

                                                    
                                                                            register_sidebar( array(

                                                                                'name' => 'notre-boulangerie',
                                                                                'id' => 'notre-boulangerie',
                                                                               'before_widget' => '<div>',
                                                                               'after_widget' => '</div>',
                                                                                ) );

                                                                                register_sidebar( array(

                                                                                    'name' => 'presentation-boulangerie',
                                                                                    'id' => 'presentation-boulangerie',
                                                                                   'before_widget' => '<div class="description rem2 text-center">',
                                                                                   'after_widget' => '</div>',
                                                                                    ) );

                                                                                    register_sidebar( array(

                                                                                        'name' => 'prestations',
                                                                                        'id' => 'prestations',
                                                                                       'before_widget' => '<div>',
                                                                                       'after_widget' => '</div>',
                                                                                        ) );

                                                                                        register_sidebar( array(

                                                                                            'name' => 'produit-du-moment',
                                                                                            'id' => 'produit-du-moment',
                                                                                           'before_widget' => '<div class="galette d-flex justify-content-center align-items-center flex-column">',
                                                                                           'after_widget' => '</div>',
                                                                                            ) );

                                                                                            
                                                                register_sidebar( array(

                                                                    'name' => 'prestation-1',
                                                                    'id' => 'prestation-1',
                                                                   'before_widget' => '<div class="d-flex justify-content-start presta-produit">',
                                                                   'after_widget' => '</div>',
                                                                    ) );

                                                                    register_sidebar( array(

                                                                        'name' => 'nos-viennoiseries',
                                                                        'id' => 'nos-viennoiseries',
                                                                       'before_widget' => '<div class="d-flex justify-content-start">',
                                                                       'after_widget' => '</div>',
                                                                        ) );

                                                                        register_sidebar( array(

                                                                            'name' => 'prestation-2',
                                                                            'id' => 'prestation-2',
                                                                           'before_widget' => '<div class="d-flex justify-content-start presta-produit">',
                                                                           'after_widget' => '</div>',
                                                                            ) );
        
                                                                            register_sidebar( array(
        
                                                                                'name' => 'nos-desserts',
                                                                                'id' => 'nos-desserts',
                                                                               'before_widget' => '<div class="d-flex justify-content-start">',
                                                                               'after_widget' => '</div>',
                                                                                ) );

                                                                                register_sidebar( array(

                                                                                    'name' => 'prestation-3',
                                                                                    'id' => 'prestation-3',
                                                                                   'before_widget' => '<div class="d-flex justify-content-start presta-produit">',
                                                                                   'after_widget' => '</div>',
                                                                                    ) );
                
                                                                                    register_sidebar( array(
                
                                                                                        'name' => 'nos-maccarons',
                                                                                        'id' => 'nos-maccarons',
                                                                                       'before_widget' => '<div class="d-flex justify-content-start">',
                                                                                       'after_widget' => '</div>',
                                                                                        ) );
        
                                                                                        
                                                                                    register_sidebar( array(
                
                                                                                        'name' => 'img-footer-1',
                                                                                        'id' => 'img-footer-1',
                                                                                       'before_widget' => '<div class="img-footer">',
                                                                                       'after_widget' => '</div>',
                                                                                        ) );

                                                                                        register_sidebar( array(
                
                                                                                            'name' => 'img-footer-2',
                                                                                            'id' => 'img-footer-2',
                                                                                           'before_widget' => '<div class="img-footer">',
                                                                                           'after_widget' => '</div>',
                                                                                            ) );
                                                                                            
                                                                                        register_sidebar( array(
                
                                                                                            'name' => 'img-footer-3',
                                                                                            'id' => 'img-footer-3',
                                                                                           'before_widget' => '<div class="img-footer">',
                                                                                           'after_widget' => '</div>',
                                                                                            ) );

                                                                                            register_sidebar( array(
                
                                                                                                'name' => 'img-footer-4',
                                                                                                'id' => 'img-footer-4',
                                                                                               'before_widget' => '<div class="img-footer">',
                                                                                               'after_widget' => '</div>',
                                                                                                ) );
                                                                                                
                                                                                            register_sidebar( array(
                
                                                                                                'name' => 'img-footer-5',
                                                                                                'id' => 'img-footer-5',
                                                                                               'before_widget' => '<div class="img-footer">',
                                                                                               'after_widget' => '</div>',
                                                                                                ) );

                                                                                                register_sidebar( array(
                
                                                                                                    'name' => 'img-footer-6',
                                                                                                    'id' => 'img-footer-6',
                                                                                                   'before_widget' => '<div class="img-footer">',
                                                                                                   'after_widget' => '</div>',
                                                                                                    ) );

                                                                                                    register_sidebar( array(
                
                                                                                                        'name' => 'logo-footer',
                                                                                                        'id' => 'logo-footer',
                                                                                                       'before_widget' => '<div class="col-12 d-flex justify-content-center mt-30 mb-66 logo-footer">',
                                                                                                       'after_widget' => '</div>',
                                                                                                        ) );

                                                                                                        register_sidebar( array(
                
                                                                                                            'name' => 'horaires-lundi',
                                                                                                            'id' => 'horaires-lundi',
                                                                                                           'before_widget' => '<div class="horaires-div">',
                                                                                                           'after_widget' => '</div>',
                                                                                                            ) );

                                                                                                            register_sidebar( array(
                
                                                                                                                'name' => 'horaires-mardi',
                                                                                                                'id' => 'horaires-mardi',
                                                                                                               'before_widget' => '<div class="horaires-div">',
                                                                                                               'after_widget' => '</div>',
                                                                                                                ) );

                                                                                                                register_sidebar( array(
                
                                                                                                                    'name' => 'horaires-mercredi',
                                                                                                                    'id' => 'horaires-mercredi',
                                                                                                                   'before_widget' => '<div class="horaires-div">',
                                                                                                                   'after_widget' => '</div>',
                                                                                                                    ) );

                                                                                                                    register_sidebar( array(
                
                                                                                                                        'name' => 'horaires-jeudi',
                                                                                                                        'id' => 'horaires-jeudi',
                                                                                                                       'before_widget' => '<div class="horaires-div">',
                                                                                                                       'after_widget' => '</div>',
                                                                                                                        ) );

                                                                                                                        register_sidebar( array(
                
                                                                                                                            'name' => 'horaires-vendredi',
                                                                                                                            'id' => 'horaires-vendredi',
                                                                                                                           'before_widget' => '<div class="horaires-div">',
                                                                                                                           'after_widget' => '</div>',
                                                                                                                            ) );
                                                                                                                            register_sidebar( array(
                
                                                                                                                                'name' => 'horaires-samedi',
                                                                                                                                'id' => 'horaires-samedi',
                                                                                                                               'before_widget' => '<div class="horaires-div">',
                                                                                                                               'after_widget' => '</div>',
                                                                                                                                ) );

                                                                                                                                register_sidebar( array(
                
                                                                                                                                    'name' => 'horaires-dimanche',
                                                                                                                                    'id' => 'horaires-dimanche',
                                                                                                                                   'before_widget' => '<div class="horaires-div">',
                                                                                                                                   'after_widget' => '</div>',
                                                                                                                                    ) );

                                                                                                                                    register_sidebar( array(
                
                                                                                                                                        'name' => 'contact-footer',
                                                                                                                                        'id' => 'contact-footer',
                                                                                                                                       'before_widget' => '<div>',
                                                                                                                                       'after_widget' => '</div>',
                                                                                                                                        ) );

                                                                                                                                        register_sidebar( array(
                
                                                                                                                                            'name' => 'tel-footer',
                                                                                                                                            'id' => 'tel-footer',
                                                                                                                                           'before_widget' => '<div>',
                                                                                                                                           'after_widget' => '</div>',
                                                                                                                                            ) );
                                                                                                                                            register_sidebar( array(
                
                                                                                                                                                'name' => 'menu-burger',
                                                                                                                                                'id' => 'menu-burger',
                                                                                                                                               'before_widget' => '<ul class="list-style">',
                                                                                                                                               'after_widget' => '</ul>',
                                                                                                                                                ) );
                                                                                             

                                                                                                                    
    




 
 
 }

add_action( 'widgets_init', 'header_widgets_init' );

add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

register_nav_menus( array(

    'nav' => 'Menu Principal'

));

